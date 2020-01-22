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
        return view('pages.web-design')->with('title', $title); 
    }
    
    public function graphicdesign(){
        $title = "Graphic Design";
        return view('pages.graphic-design')->with('title', $title); 
    }
    
    public function userexperienceoptimization(){
        $title = "User Experience Optimization";
        return view('pages.user-experience-optimization')->with('title', $title); 
    }
    
    public function webmaintenance(){
        $title = "Web Maintenance";
        return view('pages.web-maintenance')->with('title', $title); 
    }
    
    public function contact(){
        $title = "Contact";
        return view('pages.contact')->with('title', $title); 
    }
    
    public function privacypolicy(){
        $title = "Privacy Policy";
        return view('pages.privacy-policy')->with('title', $title); 
    }
    
    public function refundpolicy(){
        $title = "Refund Policy";
        return view('pages.refund-policy')->with('title', $title); 
    }
    
    public function salespolicy(){
        $title = "Sales Policy";
        return view('pages.sales-policy')->with('title', $title); 
    }
    
    public function termsofuse(){
        $title = "Terms Of Use";
        return view('pages.terms-of-use')->with('title', $title); 
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