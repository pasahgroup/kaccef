<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KacceController;
use App\Http\Controllers\MailController;

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

 //Route::resource('/',KacceController::class);
//Route::resource('/', KacceController::class);


// Route::get('sendbasicemail','MailController@basic_email');
// Route::get('sendhtmlemail','MailController@html_email');
// Route::get('sendattachmentemail','MailController@attachment_email');

Route::get('sendbasicemail', [MailController::class, 'basic_email']);
Route::get('sendhtmlemail', [MailController::class, 'html_email']);
Route::get('sendattachmentemail', [MailController::class, 'attachment_email']);

Route::get('/kacce', function () {
    return view('index');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/tree', function () {
    return view('tree');
});
Route::get('/bee', function () {
    return view('bee');
});
Route::get('/entrepreneur', function () {
    return view('entrepreneur');
});
Route::get('/children', function () {
    return view('children');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/donate', function () {
    return view('donate');
});