<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests;
use App\Post;
use App\Http\Resources\Post as PostResource;
use DB;

class PostsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    // Make pages visible by auth except the index(for posts) and show views
    $this->middleware('auth', ['except' => ['index', 'show']]);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    ///// Add paginated views to the response
    // $posts = Post::orderBy('title', 'desc')->paginate(10);

    $posts = Post::latest()->paginate(5);
    
    return 
      view('posts.index', compact('posts'))->with('user');

    
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //Load a view
    return view('posts.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {

    //Validation
    $this->validate($request, [
        'title' => 'required',
        'body' => 'required',
        'cover_image' => 'image|nullable|max:1999'
    ]);

    //Handle file upload
    if($request->hasFile('cover_image')) {
      // Get filename with the extension
      $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
      
      // Get just filename
      $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
      
      //Get just extension
      $extension = $request->file('cover_image')->getClientOriginalExtension();

      // Filename to store
      $fileNameToStore = $filename.'_'.time().'.'.$extension;

      //Upload the image
      $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
    } else {
      $fileNameToStore = '';
    }

    // Create post
    $post = new Post;
    $post->title = $request->input('title');
    $post->body = $request->input('body');
    $post->user_id = auth()->user()->id;
    $post->cover_image = $fileNameToStore;
    $post->save();

    return redirect('/posts')->with('success', 'Post created');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    // fetch the post by id
    $post = Post::find($id);
    return view('posts.show')->with('post', $post);

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    // fetch the post by id
    $post = Post::find($id);

    // Check for correct user
    if(auth()->user()->id !== $post->user_id) {
      return redirect('/posts')->with('error', 'You reached an unauthorized section and you have been re-directed.');
    }

    return view('posts.edit')->with('post', $post);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //Validation
    $this->validate($request, [
        'title' => 'required',
        'body' => 'required'
    ]);

    //Handle file upload
    if($request->hasFile('cover_image')) {
      // Get filename with the extension
      $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
      
      // Get just filename
      $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
      
      //Get just extension
      $extension = $request->file('cover_image')->getClientOriginalExtension();

      // Filename to store
      $fileNameToStore = $filename.'_'.time().'.'.$extension;

      //Upload the image
      $path = $request->file('cover_image')->storeAs('storage/cover_images', $fileNameToStore);
    } 

    // Create post
    $post = Post::find($id);
    $post->title = $request->input('title');
    $post->body = $request->input('body');
    if($request->hasFile('cover_image')) {
      $post->cover_image = $fileNameToStore;
    }
    $post->save();

    return redirect('/posts')->with('success', 'Post updated');       
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
    $post = Post::find($id);
    
    // Check for correct user
    if(auth()->user()->id !== $post->user_id) {
      return redirect('/posts')->with('error', 'You reached an unauthorized section and you have been re-directed.');
    }

    if($post->cover_image !== '') {
      // Delete image
      Storage::disk('public')->delete('cover_images/'.$post->cover_image);
    }

    $post->delete();
    return redirect('/posts')->with('success', 'Post removed'); 

  }
}