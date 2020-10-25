<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function register(){
        return view('pages.register');
    }

    public function login(){
        return view('pages.login');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function events(){
        return view('pages.events');
    }

    public function news(){
        return view('pages.news');
    }

    public function profile(){
        return view('pages.profile');
    }
}
