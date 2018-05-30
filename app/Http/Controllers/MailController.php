<?php
namespace Django\Http\Controllers;
 
use Django\Http\Controllers\Controller;
use Django\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'vishalrajan';
        $objDemo->receiver = 'riya jaggi';
 
        Mail::to("vishalrajan@mansainfotech.com")->send(new DemoEmail($objDemo));
    }
}