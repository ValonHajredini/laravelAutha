<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\NewUserWelcome;
use Auth;
use Flashy;
class ContactController extends Controller
{
    public function index(){


        return view('client.Contact');
    }
    public function sendEmail(Request $request){

        $this->validate($request,['InputEmail' => 'required|email']);
        $data = array(
            'InputEmail' => $request->InputEmail,
            'InputName' => $request->InputName,
            'InputMessage' => $request->InputMessage

        );
        Mail::send('emails.contact', $data, function ($message) use ($data){
            $message->from($data['InputEmail']);
            $message->to('hajredini.valon@gmail.com');
            $message->subject($data['InputName']);
        });
        if (!Mail::failures()) {
            flashy()->error('Email wos not send, plays try agen.', '#');
        }else {
            flashy()->success('Email wos send successfully.', '#');
        }

        return back();

//       if (Mail::to('hajredini.valon@gmail.com')->send(new NewUserWelcome())){
//           return back();
//        }else {
//           return "Is not sended";
//       }

    }
}
