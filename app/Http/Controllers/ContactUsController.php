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
        
        \Mail::send('mail',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'message' => $request->get('message')
        ), function($message) use ($request)
        {
            $message->from('name');
            $message->to('businesstodaygh@gmail.com', 'Admin')->message($request->get('message'));
        });

        return back()->with('success', 'Thank You for contacting us!');
    }   

}
