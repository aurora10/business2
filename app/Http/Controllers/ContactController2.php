<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController2 extends Controller
{
    public function contact(){
        return view('home');
    }

    public function contactPost(Request $request){
        $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|email',
                        
                        'comment' => 'required'
                ]);

        Mail::send('pages.email', [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'comment' => $request->get('comment') ],
                function ($message) {
                        $message->from('r.zimerman@marketorix.be');
                        $message->to('aurora10@gmail.com', 'Your Name')
                                ->subject('Your Website Contact Form');
        });

        return back()->with('success', 'Thanks for contacting us, We will get back to you soon!');

    }
}