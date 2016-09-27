<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Validator;
use Redirect;
use DB;
use DateTime;

class ContactController extends Controller
{

    public function index()
    {
      # code...
      return view('contact');
    }

    public function docontact()
    {
      # code...
        // validate the info, create rules for the inputs
        $rules = array(
            'name'        => 'required',
            'phonenumber' => 'required',
            'email'       => 'required|email',
            'subject'     => 'required',
            'message'     => 'required',
        );
        // run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);
        // if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return redirect()->back()
                  ->withErrors($validator) // send back all errors to the login form
                  ->withInput(); // send back the input (not the password) so that we can repopulate the form
        } else {
            $name    = Input::get('name');
            $phonenumber  = Input::get('phonenumber');
            $email        = Input::get('email');
            $subject      = Input::get('subject');
            $message      = Input::get('message');
            $now          = new DateTime();




            $insert = DB::table('mailbox')->insert([
                          'name'       => $name,
                          'phonenumber'    => $phonenumber,
                          'email'          => $email,
                          'subject'       => $subject,
                          'message'         => $message,
                          'created_at'     => $now,
                      ]);
            if($insert){
                  return Redirect()->back()->with('success','Thank you for contact us !');
            }else{
                  return Redirect()->back()->with('error','Sorry something is error !');
            }
        }
    }
}
