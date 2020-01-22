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

    public function howitworks(){
        $title = "How It Works";
        return view('pages.how-it-works')->with('title', $title); 
    }

    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title', $title); 
    }

    public function webdesign(){
        $title = "Web Design";
        return view('pages.webdesign')->with('title', $title); 
    }
    
    public function graphicdesign(){
        $title = "Graphic Design";
        return view('pages.graphicdesign')->with('title', $title); 
    }
    
    public function userexperienceoptimization(){
        $title = "User Experience Optimization";
        return view('pages.userexperienceoptimization')->with('title', $title); 
    }
    
    public function webmaintenance(){
        $title = "Web Maintenance";
        return view('pages.webmaintenance')->with('title', $title); 
    }
    
    public function contact(){
        $title = "Contact";
        return view('pages.contact')->with('title', $title); 
    }
    
    public function privacypolicy(){
        $title = "Privacy Policy";
        return view('pages.privacypolicy')->with('title', $title); 
    }
    
    public function refundpolicy(){
        $title = "Refund Policy";
        return view('pages.refundpolicy')->with('title', $title); 
    }
    
    public function salespolicy(){
        $title = "Sales Policy";
        return view('pages.salespolicy')->with('title', $title); 
    }
    
    public function termsofuse(){
        $title = "Terms Of Use";
        return view('pages.termsofuse')->with('title', $title); 
    }
    
    public function faqs(){
        $title = "FAQs";
        return view('pages.faqs')->with('title', $title); 
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Graphic Design', 'User Experience Optimization', 'Web Maintenance']
        );
        return view('pages.services')->with($data); 
    }
}