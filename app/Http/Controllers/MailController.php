<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use App\Models\User;
use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Mail from binary it.com',
            'body'  => 'This is a test mail.'
        ];

        $userMail = User::findOrFail(auth()->user()->id);
        Mail::to($userMail->email)->send(new DemoMail($mailData));
        dd('Email is sent successfully');
    }
}
