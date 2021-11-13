<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;

use Illuminate\Http\Request;
use Mail;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }


//     public function courses(){
        
//         return view('pages.courses');
//     }



//     public function sendEmail(Request $request){
//  $details=[
// 'name'=>$request->name,
// 'email'=>$request->email,
// 'msg'=>$request->msg
//  ];
//  Mail::to('itsmine774@gmail.com')->send(new ContactMail($details));
//  return back()->with('message_sent','message sent');
//     }
}
