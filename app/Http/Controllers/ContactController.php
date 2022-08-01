<?php

namespace App\Http\Controllers;
use Route;
use Illuminate\Http\Request;
use Mail;
use Session;

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
                        'g-recaptcha-response' => function ($attribute, $value, $fail) {
                                $secret_key = config('services.recapcha.secret');
                                //dd($secret_key);
                                $response = $value;
                                $userIP = $_SERVER['REMOTE_ADDR'];
                                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$response&remoteip=$userIP";
                                $response = \file_get_contents($url);
                                $response = json_decode($response);
                                //dd($response);
                               if (!$response->success) {
                                    Session::flash('g-recaptcha-response', 'Please check recapcha');
                                    Session::flash('alert-class', 'alert-danger');
                                    $fail($attribute.'Google recapcha failed');
                               }
                        }
                        
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
                        $message->to('sales@marketorix.com', 'Your Name')
                                ->subject('Your Website Contact Form');
        });

        return back()->with('success', 'Thanks for contacting us, we will get back to you soon!');

    }
}
