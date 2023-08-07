<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('layout1/home/contact');
    }

    public function upload(Request $request)
    {
        $filename = time() . "kp." . $request->file('image')->getClientOriginalExtension();
        echo $request->file('image')->storeAs('upload', $filename);
    }

    public function contactdata(Request $request)
    {
        Contact::create([
            'fullname' => $request->fullname,
            'emailaddres' => $request->emailaddres,
            'phonenumber' => $request->phonenumber,
            'message' => $request->message,
        ]);

        return redirect('/contactdata')->with('msg', ' Created add susscesfully');
    }
}
