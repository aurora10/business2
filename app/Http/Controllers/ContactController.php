<?php

namespace App\Http\Controllers;
use Route;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact(Request $request){
        $uri = Route::current()->uri;
        $view = 'pages.'. $uri;
       
        return view($view);
    }

    public function contactPost(Request $request){
        $this->validate($request, [
                        'name' => 'required',
                        'email' => 'required|email',
                        
                        'comment' => 'required',
                        //'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
                        
                ]);
       $uri = Route::current()->uri;


        Mail::send('pages.email', [
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'phone' => $request->get('phone'),
                'comment' => $request->get('comment'),
                'uri' => $uri],
                function ($message) {
                        $message->from('sales@marketorix.com');
                        $message->to('robert@marketorix.com', 'Your Name')
                                ->subject('Your Website Contact Form');
        });

        return back()->with('success', 'Thanks for contacting us, we will get back to you soon!');

    }
}
