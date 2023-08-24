<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('send/email', function () {

    $send_mail = 'doannvph27169@fpt.edu.vn';

    dispatch(new App\Jobs\SendEmailQueueJob($send_mail));

    dd('send mail successfully !!');
});
