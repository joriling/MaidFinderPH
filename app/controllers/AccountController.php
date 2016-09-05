<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AccountController
 *
 * @author Hp
 */
class AccountController extends BaseController {

    public function admin_login() {
        return View::make('admin.login');
    }
    public function handle_admin_login() {

        $email = Input::get('email');
        $password = Input::get('password');

        $admin = Admins::where('email', '=', $email)
                        ->where('password', '=', $password)
                        ->get();
        if($admin and $admin->email == $email and $admin->password == $password) {
            Session::put('admin', $admin);
            Return Redirect::to('/dashboard');
        }
    }
    public function handleLogin() {

        $emp = Employers::where('email', '=', Input::get('email'))
                ->where('password', '=', Input::get('password'))
                ->first();

        if($emp and ($emp->email == Input::get('email') and $emp->password == Input::get('password'))) {
            Session::put('employer', $emp);
            Session::put('isAuth',true);


            return Redirect::to('employer/home');
        }
        $app = Applicants::where('email', '=', Input::get('email'))
                ->where('password', '=', Input::get('password'))
                ->first();
        if($app and ($app->email == Input::get('email') and $app->password == Input::get('password'))) {
            Session::put('applicant',$app);
            Session::put('isAuth',true);
            return Redirect::to('applicant/profile');
        }
        return Redirect::to('user-login')->with('msg','Invalid email or password');
    }

    /*
    * Check if email is already exists into employers and applicants table
    * if exits, redirect back to registration page and try another email
    * otherwise create a new user record
     * With validator
    */
    public function next()
    {

        $emp = Employers::where('email', '=', Input::get('email'))->first();
        $app = Applicants::where('email', '=', Input::get('email'))->first();

        if (($emp and $emp->email == Input::get('email')) or ($app and $app->email == Input::get('email'))) {
            return Redirect::to('user-register')
                ->with('message', 'Email is already used');

        }

        /*
         *
         * User registration validation rules
         *
         *
         */
        $temp = array(
            'email' => Input::get('email'),
            'fname' => Input::get('fname'),
            'lname' => Input::get('lname'),
            'pass' => Input::get('password'),
            'confirm' => Input::get('confirm')
        );

        $rules = array(
            'email' => 'required|email',
            'fname' => 'required',
            'lname' => 'required',
            'pass' => 'required|max:10',
            'confirm' => 'same:pass'
        );
        $messages = array(
            'email.required' => 'Email is required',
            'email.email' => 'Invalid email',
            'fname.required' => 'First name is required',
            'lname.required' => 'Last name is required',
            'pass.required' => 'Password is required',
            'confirm.same' => 'Password do not match'
        );
        $validator = Validator::make($temp, $rules, $messages);

        if ($validator->fails()) {

            $messages = $validator->messages();
            return Redirect::to('user-register')
                ->with('error', $messages)
                ->with('input', $temp);
        }
        Session::put('temp', $temp);

        return View::make('account.next');
    }

    public function employer_account() {

        if(Session::has('temp')) {


            $temp = Session::get('temp');
            $emp = new Employers();
            $emp->email = $temp['email'];
            $emp->fname = $temp['fname'];
            $emp->lname = $temp['lname'];
            $emp->password = $temp['pass'];
            $emp->save();
            Session::forget('temp');

            $emp = Employers::find($emp->empid);
            if($emp and ($emp->email == $temp['email'] and $emp->password == $temp['pass'])) {
                Session::put('employer', $emp);
                return Redirect::to('employer/home');
            }
        }
        return Redirect::to('user-register');
    }

    public function applicant_account() {

        if(Session::has('temp')) {


          $temp = Session::get('temp');
          $app = new Applicants();
          $app->email = $temp['email'];
          $app->fname = $temp['fname'];
          $app->lname = $temp['lname'];
          $app->password = $temp['pass'];
          $app->save();
          Session::forget('temp');

          $app = Applicants::find($app->appid);
          if($app and ($app->email == $temp['email'] and $app->password == $temp['pass'])) {
              Session::put('applicant', $app);
              return Redirect::to('applicant/home');
          }
      }
      return Redirect::to('user-register');
    }
}
