<?php

namespace App\Http\Controllers;


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

 
}
