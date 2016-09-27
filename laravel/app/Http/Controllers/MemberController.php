<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Validator;
use Redirect;
use DB;
use DateTime;

class MemberController extends Controller
{
    //

    public function index()
    {
      # code...

    }
    public function login()
    {
      # code...
      return view('member.login');
    }
    public function dologin()
    {
      # code...
      // validate the info, create rules for the inputs
      $rules = array(
          // 'email'    => 'required|email', // make sure the email is an actual email
          // 'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
      );
      // run the validation rules on the inputs from the form
      $validator = Validator::make(Input::all(), $rules);
      // if the validator fails, redirect back to the form
      if ($validator->fails()) {
          return redirect()->back()
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
      } else {


      }
    }
    public function signup()
    {
      # code...
      return view('member.signup');

    }
    public function dosignup()
    {
      # code...
      // validate the info, create rules for the inputs
      $rules = array(
          'fullname'    => 'required',
          'phonenumber'    => 'required',
          'email'    => 'required|email', // make sure the email is an actual email
          'password' => 'required|alphaNum|min:3', // password can only be alphanumeric and has to be greater than 3 characters
          'gender'    => 'required',
          'birthofdate'    => 'required',
      );
      // run the validation rules on the inputs from the form
      $validator = Validator::make(Input::all(), $rules);
      // if the validator fails, redirect back to the form
      if ($validator->fails()) {
          return redirect()->back()
                ->withErrors($validator) // send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
      } else {
          $fullname     = Input::get('fullname');
          $phonenumber  = Input::get('phonenumber');
          $email        = Input::get('email');
          $password     = md5(Input::get('password'));
          $gender       = Input::get('gender');
          $birthofdate  = Input::get('birthofdate');
          $now          = new DateTime();
          $check=DB::table('members')->where('email','=',$email)->count();
          if($check > 0){
              return Redirect()->back()->with('error','Sorry this email already registered !');
          }else{



              $insert = DB::table('members')->insert([
                            'members_enable' => 1,
                            'fullname'       => $fullname,
                            'phonenumber'    => $phonenumber,
                            'email'          => $email,
                            'password'       => $password,
                            'gender'         => $gender,
                            'birthofdate'    => $birthofdate,
                            'created_at'     => $now,
                        ]);
              if($insert){
                    return Redirect('member/signup')->with('success','Congratulations Successfully register !');
              }else{
                    return Redirect()->back()->with('error','Sorry something is error !');
              }

          }


      }
    }
}
