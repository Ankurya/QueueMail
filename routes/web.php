<?php

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\EmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');

    // dispatch(function(){
    //      Mail::to('test@test.com')
    //     ->send(new SendMail());
    // })  ->delay(now()->addSeconds(10));

    // echo 'sent';



    // $data = ['name' => 'the name of email'];
    // Mail::send('index',$data,function($msg){
    //     $msg->sender('noreply@test.com');

    //     $msg->to('test@yopmail.com',"test mail")
    //     ->subject("sending mail");

    // });

    // echo "sent";


});

Route::get('send-mail', 'App\Http\Controllers\EmailController@sendEmail');
