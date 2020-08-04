<?php

use Illuminate\Notifications\Messages\MailMessage;


/* --------------------- Common/User Routes START -------------------------------- */

Route::get('/', 'SiteController@index')->name('index');
Route::get('/terms-and-conditions', 'TermController@index')->name('terms');
Route::get('/about-us', 'AboutController@index')->name('about');

Route::get('/contact-us', 'ContactController@store')->name('contact.store');
Route::get('/contact-us', 'ContactController@index')->name('contact');

Route::get('/blog', 'BlogController@index')->name('blog');



Auth::routes([ 'verify' => true ]);

Route::get('/users/all', 'Admin\UserController@all')->name('users.all');

Route::middleware(['verified'])->group(function () {
    Route::prefix('/vendor')->name('vendor.')->group(function () {
        Route::get('/join', 'VendorController@join')->name('join');
        Route::post('/submit', 'VendorController@save')->name('store');
    });



    Route::prefix('/post')->name('post.')->group(function ()
    {
       Route::post('/create', 'PostController@store')->name('create'); 
    });

    Route::get('/feed/all', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');



    // Enrollment Routes
    Route::get('/enrolled', 'EnrollmentController@index')->name('enrolled');

    Route::get('/messages', 'MessageController@index')->name('messages');

    Route::get('/notifications', 'NotificationController@index')->name('notifications');






    // profile routea
    Route::get('/my-profile', 'ProfileController@index')->name('profile');
    Route::post('/my-profile', 'ProfileController@update')->name('profile.update');

    Route::get('/account-settings', 'ProfileController@accountSettings')->name('p.account.settings');
    Route::post('/account-settings', 'ProfileController@accountSettingsUpdate')->name('p.account.settings.update');



   
});

Route::get('/openings', 'HomeController@openings')->name('openings')->middleware('verified');

// Profile routes


Route::get('/my-profile', 'ProfileController@index')->name('profile')->middleware('verified');
Route::get('/notification-settings', 'ProfileController@notifsettings')->name('notification.settings')->middleware('verified');


Route::get('/email/test', 'ProfileController@testmail');


/* --------------------- Common/User Routes END -------------------------------- */

/* ----------------------- Admin Routes START -------------------------------- */

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
    
    /**
     * Admin Auth Route(s)
     */
    Route::namespace('Auth')->group(function(){
        
        //Login Routes
        Route::get('/login','LoginController@showLoginForm')->name('login');
        Route::post('/login','LoginController@login');
        Route::post('/logout','LoginController@logout')->name('logout');

        //Register Routes
        // Route::get('/register','RegisterController@showRegistrationForm')->name('register');
        // Route::post('/register','RegisterController@register');

        //Forgot Password Routes
        Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('password.request');
        Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');

        //Reset Password Routes
        Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
        Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');

        // Email Verification Route(s)
        Route::get('email/verify','VerificationController@show')->name('verification.notice');
        Route::get('email/verify/{id}','VerificationController@verify')->name('verification.verify');
        Route::get('email/resend','VerificationController@resend')->name('verification.resend');

    });

    Route::get('/dashboard','HomeController@index')->name('home')->middleware('guard.verified:admin,admin.verification.notice');

    //Put all of your admin routes here...

    Route::prefix('user')->group(function ()
    {
        Route::get('add', 'UserController@create')->name('user.add');
        Route::post('add', 'UserController@save')->name('user.save');
        Route::get('', 'UserController@index')->name('user');

    });

     Route::prefix('/category')->name('category.')->group(function (){
         Route::get('/create', 'CategoryController@create')->name('create');
         Route::post('/create', 'CategoryController@save')->name('save');
         Route::get('/', 'CategoryController@index')->name('index');
     });

     Route::prefix('opening')->name('opening.')->group(function ()
     {
         Route::get('all', 'OpeningController@index')->name('all');
         Route::get('create', 'OpeningController@create')->name('create');
         Route::post('create', 'OpeningController@save')->name('save');
     });


      Route::prefix('request')->name('request.')->group(function ()
     {
         Route::get('all', 'RequestController@index')->name('all');
         Route::get('create', 'RequestController@create')->name('create');
         Route::post('create', 'RequestController@save')->name('save');
     });

});

/* ----------------------- Admin Routes END -------------------------------- */
