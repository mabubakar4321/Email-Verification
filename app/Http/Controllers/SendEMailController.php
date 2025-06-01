<?php

namespace App\Http\Controllers;

use App\Mail\welcomeemail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEMailController extends Controller
{
    //
    public function contact(){
        return view('contact');
    }
    public function sendEmail(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required|min:5|max:150',
            'message'=>'required|min:10|max:200',
            'attachment'=>'required|mimes:pdf,doc,docx|max:2400 '
        ]);

        $filename=time(). "." . $request->file('attachment')->extension();
        $request->file('attachment')->move('uploads', $filename);
        // dd($filename);
        $toadminmail='abubakar6313648@gmail.com';
        Mail::to($toadminmail)->send(new welcomeemail($request->all(), $filename));
    }
}
