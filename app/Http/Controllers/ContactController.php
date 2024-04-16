<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplicationDetail;
use App\Models\ContactQuery;

class ContactController extends Controller
{
    public function contact_us_store(Request $request){
        $validate = $request->validate([
          'firstname'             =>    'required',
          'email'                 =>    'required',
          'contact'               =>    'required',
        ]);
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
        // return $request->all();
        $validate = $request->validate([
          'username'             =>    'required',
          'email'                 =>    'required',
          'contact'               =>    'required',
          'resume'                =>    'required',
        ]);
        if ($request->resume != "") {
            $image = rand() . '.' . $request->resume->extension();
            $request->resume->move(('Resume'), $image);
        } else {
            $image = "0";
        }
        $contact_us = ApplicationDetail::create([
            'username'             =>     $request->username,
            'email'                 =>     $request->email,
            'contact'               =>     $request->contact,
            'menu_language'         =>     $request->menu_language,
            'resume'                =>     $image,
        ]);
        return redirect()->back();
      }
}
