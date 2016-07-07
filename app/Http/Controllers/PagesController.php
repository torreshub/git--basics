<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class PagesController extends Controller
{
    
    public function home(){
        return view('pages.home');
    }
    
    public function aboutUs()
    {
        return view('pages.aboutUs');
    }
    
    public function contactUs()
    {
        return view('pages.contactUs');
    }
    public function tmlcapp()
    {
        return view('pages.tmlcapp');
    }
}
