<?php

namespace App\Http\Controllers;

use App\Models\ContactQuery;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index(){
    return view('index');
  }
  public function about_page(){
    return view('home.about');
  }
  public function serveices_page(){
    return view('home.services');
  }
  public function blogs_page(){
    return view('home.blog');
  }
  public function career_page(){
    return view('home.career');
  }
  public function contact_us_page(){
    return view('home.contact_us');
  }

  public function contact_us_store(Request $request){
    // return $request->all();
    $contact_us = ContactQuery::create([
        'firstname'             =>     $request->firstname,
        'email'                 =>     $request->email,
        'contact'               =>     $request->contact,
        'menu_language'         =>     $request->menu_language,
        'message_query'         =>     $request->message_query,
    ]);
    return $contact_us;
  }

  public function career_application(Request $request){
    return $request->all();
    return view('home.contact_us');
  }
}
