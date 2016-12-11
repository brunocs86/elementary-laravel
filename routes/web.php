<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('about', function() {
    return view('about');
});

Route::get('contact', function() {
    return view('contact');
});

use Illuminate\Http\Request;
use App\Mail\FeedbackReceived;
use Illuminate\Support\Facades\Mail;
Route::post('contact', function(Request $request) {
    \Validator::make($request->all(), [
        'name' => 'required|string',
        'email' => 'required|email',
        'comment' => 'required|string'
    ])->validate();

    Mail::to($request->get('email'))
        ->send(new FeedbackReceived($request->get('name'), $request->get('comment')));

    return redirect('/contact')->with([
        'success_message' => 'Your message has been sent!'
    ]);
});
