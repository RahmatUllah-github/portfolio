<?php

use App\Mail\ContactUsMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('contact-us', function (Request $request) {
    $data = $request->all();

    Mail::to('rahmatul0799@gmail.com')->send(new ContactUsMail(
        $data['name'],
        $data['email'],
        $data['subject'],
        $data['message']
    ));

    return true;
})->name('contact-us');
