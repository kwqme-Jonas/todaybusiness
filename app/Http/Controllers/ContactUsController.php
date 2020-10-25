<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\contact;
use Mail;

class ContactUsController extends Controller
{
    public function createForm(Request $request){
        return view('contact');
    }

    public function contactUsForm(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        contact::create($request->all());
        

        return back()->with('success', 'Thank You for contacting us!');
    }   

}
