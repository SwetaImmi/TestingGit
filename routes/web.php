<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(UserController::class)->group(function(){
Route::get('/','index');
Route::get('about','about_page');
Route::get('blogs','blogs_page');
Route::get('career','career_page');
Route::get('services','serveices_page');
Route::get('contact_us','contact_us_page');
Route::post('contact_us/send','contact_us_store');
Route::post('career_application/send','career_application');
});

