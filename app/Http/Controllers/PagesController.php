<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to Laravel!";
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title); 
    }

    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title', $title); 
    }

    public function howitworks(){
        $title = "How It Works";
        return view('pages.how-it-works')->with('title', $title); 
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Graphic Design', 'User Experience Optimization', 'Web Maintenance']
        );
        return view('pages.services')->with($data); 
    }
}