<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; # don't forgot to add this
use App\Http\Controllers\ContactUsController; # don't forgot to add this
use App\Http\Controllers\SpecialController; # don't forgot to add this
use App\Http\Controllers\UploadImageController; # don't forgot to add this


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

Route::get('/', [HomeController::class, 'index']);

Route::get('/page/{id}', [HomeController::class, 'page']);

Route::get('contact-us',[ContactUsController::class, 'index']);

Route::post('contact-us/sendmessage',[ContactUsController::class, 'sendMessage']);

Route::post('contact-us/sendmessage/ajax',[ContactUsController::class, 'sendMessageAjax']);

Route::get('special/{id}',[HomeController::class, 'specialEntry']);

Route::get('upload-image',[UploadImageController::class, 'index']);

Route::post('upload-image/upload',[UploadImageController::class, 'uploadImage']);



Auth::routes();

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::group([
    'middleware' => 'auth'
],function(){
    Route::resource('admin/specials', SpecialController::class)->only([
        'index','create','store','edit','update','destroy'
    ]);
});


