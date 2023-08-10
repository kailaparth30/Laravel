<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;


class MailController extends Controller
{
    public function sendmail()
    {
        $mailData = [
            'title' => 'mail from kailaparth',
            'body' => 'this is  for testing email using smtp',
        ];

        Mail::to('kailaparth7@gmail.com')->send(new Demomail($mailData));

        dd('Email send successfully');
    }
}
