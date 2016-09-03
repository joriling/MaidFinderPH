<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{

    if(Session::has('applicant')) {
        return Redirect::to('applicant/home');
    }
    if(Session::has('employer')) {
        return Redirect::to('employer/home');
    }
    $location = Regions::all();
    return View::make('home.home')->with('location', $location);
});

Route::get('user-login', function() {
    if(Session::has('employer')) {
        return Redirect::to('employer/home');
    }
    if(Session::has('applicant')) {
        return Redirect::to('applicant/home');
    }
    return View::make('home.login');
});
Route::post('user-login', 'AccountController@handleLogin');

/*
 *
 * REGISTRATION ROUTES
 *
 */

Route::get('user-register', function () {
   return View::make('home.register');
});

Route::post('user-register', 'AccountController@next');

Route::get('employer', 'AccountController@employer_account');
Route::get('applicant', 'AccountController@applicant_account');
/*
 *
 * EMPLOYER ACCOUNTS ROUTES
 *
 */

Route::get('/employer/home', 'EmployerController@employer_home');
Route::get('/employer/profile', 'EmployerController@employer_profile');
Route::get('/employer/logout','EmployerController@employer_logout');
Route::get('/employer/update', 'EmployerController@update_profile');
Route::post('/employer/update', 'EmployerController@handle_update');
Route::post('/employer/update/picture','EmployerController@change_picture');
Route::get('/employer/ads', 'EmployerController@job_ads');
Route::get('/create/ad', 'EmployerController@create_ads');
Route::post('/create/ad','EmployerController@new_ads');
Route::get('/employer/ad/edit/{id}', 'EmployerController@update_ads');
Route::post('/employer/ad/edit','EmployerController@handle_ad_update');
Route::post('/update/ad', 'EmployerController@handle_ad_update');
Route::get('/employer/message/inbox', 'EmployerController@message_inbox');
Route::get('/employer/job/request', 'EmployerController@job_request');
Route::get('/employer/hired/list','EmployerController@hired_list');
Route::get('/employer/applicant/shortlist','EmployerController@shortlist');
Route::post('/employer/applicant/send/message', 'EmployerController@send_message');
Route::get('/employer/applicant/message/view/{id}', 'EmployerController@view_messages');

/*
 *
 *
 *  APPLICANT ACCOUNTS ROUTES
 *
 *
 */
Route::get('/applicant/home', 'ApplicantController@applicant_home');
Route::get('/applicant/profile','ApplicantController@profile_application');
Route::get('/applicant/logout', 'ApplicantController@applicant_logout');
Route::get('/applicant/profile/edit/', 'ApplicantController@update_profile');
Route::post('/applicant/profile/edit', 'ApplicantController@handle_update');
Route::post('/applicant/update/picture', 'ApplicantController@change_picture');
Route::get('/applicant/skills', 'ApplicantController@applicant_skill');
Route::get('/applicant/messagebox','ApplicantController@message');
Route::get('/applicant/create/application', 'ApplicantController@create_application');
Route::post('/applicant/create/application', 'ApplicantController@handle_application');
Route::get('/applicant/job/application/edit/{id}', 'ApplicantController@application_update');
Route::post('/applicant/job/application/edit', 'ApplicantController@handle_application_update');
Route::get('/employer/job/ads', 'ApplicantController@employer_ads');
Route::get('/employer/ad/profile/{id}', 'ApplicantController@emp_ad_profile');
Route::post('/applicant/shortlist/add', 'ApplicantController@add_shortlist');
Route::get('/applicant/shortlist','ApplicantController@shortlist');
Route::get('/applicant/shortlist/view/{id}','ApplicantController@view_shortlist');
Route::post('/applicant/apply/ad', 'ApplicantController@apply_ad');


/*
 *
 * HELPER ROUTES
 *
 */


Route::get('/helpers', 'HelperController@helpers');
Route::get('application/view/{id}','HelperController@application_view');

/*
 *
 * ADMIN ROUTES
 */


Route::get('site-admin', function(){
   return View::make('admin.site-admin');
});

Route::post('site-admin', function() {
   $admin = Admin::where('email', '=', Input::get('email'))
           ->where('password', '=' ,Input::get('password'))
           ->first();
   if($admin and ($admin->email == Input::get('email') and $admin->password == Input::get('password'))) {
       Session::put('admin', true);
       Session::put('admindata', $admin);
       return Redirect::to('site-admin/profile');
   }
   return Redirect::to('site-admin');
});
Route::get('site-admin/profile','AdminController@dashboard');
Route::get('site-admin/logout', 'AdminController@logout');



/*
 *
 * TEST ROUTES
 *
 *
 */


Route::get('/join', function() {
    $subscription = DB::table('plan')
        ->join('subscription', function($join){
            $join->on('plan.planid', '=', 'subscription.planid')
                ->where('subscription.empid', '=', 4);
        })->first();
    if($subscription == null) {
        return "Yes";
    } else {
        return "No";
    }
});

/*
 *
 * AJAX ROUTES
 */

Route::post('/employer/add/hirelist', function() {
    $isSave = HireLists::where('applicationid', '=', Input::get('applicationid'))->first();

    if(is_null($isSave)) {
        $hirelist = new HireLists();
        $hirelist->applicationid = Input::get('applicationid');
        $hirelist->empid = Input::get('empid');
        $hirelist->status = false;
        $hirelist->save();
        return "ok";
    }
    return "0";
});