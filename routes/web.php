<?php

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

 //$x=Auth::user()->phone;



Route::get('/', function () {
    return view('w2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@showProfile');

Route::get('/sms/send', function(\Nexmo\Client $nexmo){
	$x=Auth::user()->phone;
    $message = $nexmo->message()->send([
        'to' =>$x,
        'from' => '917857832448',
        'text' => 'This is a SOS'
    ]);
    Log::info('sent message: ' . $message['message-id']);

     if(!$message){
    
   echo'<script> alert("message not send")</script>';
  
  }
  else{
  echo $response;
   echo '<script>alert("SOS send successfully")</script>';}

});

