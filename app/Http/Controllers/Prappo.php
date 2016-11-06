<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;

class Prappo extends Controller
{
    public function index(){
        return view('mailtemplate');
        try{
            Mail::send('mailtemplate',['code'=>'SomeCode','content'=>"cool content bro"], function ($message) {
                $message->from('prappo@trinolab.net', 'Music Site');
                $message->subject('Active your account');
                $message->to('prappo.prince@gmail.com');
            });
            return "Message";
        }
        catch (\Exception $e){
            return $e->getMessage();
        }

    }
}
