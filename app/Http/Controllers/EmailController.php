<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // dd($request->all());
    SendEmailJob::dispatch('yadavankur657@gmail.com');


    }
}
