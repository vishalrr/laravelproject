<?php

namespace Django\Http\Controllers;

use Illuminate\Http\Request;
use Django\Http\Controllers\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function sendmail(){
         \Mail::raw('Now I know how to send emails with Laravel', function($message)
        {
            $message->subject('Hi There!!');
            $message->from(config('mail.from.address'), config("app.name"));
            $message->to('vishalrajan@mansainfotech.com');
        });
    }
}
