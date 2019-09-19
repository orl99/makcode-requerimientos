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

Route::get('/', function () {
    return view('welcome');
});







Route::post('messages', function() {
	//enviar mail
    $data = request()->all();
	Mail::send("mail.messages", $data, function($messages) use($data){
		$messages->from($data['email'], $data['name'])
		         ->to('makcodeglobal@gmail.com', 'Nuevo Test')
		         //->cc('mac@makcode.tech')
		         //->cc('')
		         ->subject('Nuevo Test');  
	});
	//responder usuario

	return back();
})->name('messages');