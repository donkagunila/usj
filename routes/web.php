<?php


/* --------------------- Common/User Routes START -------------------------------- */

Route::get('/', 'SiteController@index')->name('index');

Auth::routes([ 'verify' => true ]);

Route::get('/users/all', 'Admin\UserController@all')->name('users.all');

Route::middleware(['verified'])->group(function () {
    Route::prefix('/vendor')->name('vendor.')->group(function () {
        Route::get('/join', 'VendorController@join')->name('join');
        Route::post('/submit', 'VendorController@save')->name('store');
    });

    Route::get('/feed', 'HomeController@index')->name('home');

    Route::prefix('/category')->name('category.')->group(function (){
       Route::get('/all', 'CategoryController@index')->name('all'); 
    });
});

Route::get('/openings', 'HomeController@openings')->name('openings')->middleware('verified');

// Profile routes

Route::get('/my-profile', 'ProfileController@index')->name('profile')->middleware('verified');



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
       Route::get('list', 'UserController@index')->name('user.list');
       Route::get('add', 'UserController@create')->name('user.add');
    });

});

/* ----------------------- Admin Routes END -------------------------------- */
