<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vrequest;
use App\Profile;
use App\User;
use Auth;
use App\AccountSetting;
use App\Notifications\testmail;

class ProfileController extends Controller
{
    public function index()
    {

    	$user = Auth::user();

        $avatar = Auth::user()->profile->avatar;

    	// return $requested;

        // return Auth::user()->profile->avatar;

    	return view('app.profile.index');
    }

    public function testmail()
    {
    	$user = User::first();
    	$user->notify(new testmail());
    }

    public function notifSettings()
    {
        $user = Auth::user();

        $requested = $user->vrequest->status;

        // return $requested;


        return view('app.profile.index', compact('requested'));
    }

    public function update(Request $request)
    {

        // Check if there is image to update
        if (request('image')) {

            // upload the image
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('uploads/avatar'), $imageName);

            

        } else {

            $imageName = Auth::user()->profile->avatar;
        }



        $profile = Profile::where('user_id', Auth::id())->first();
        $profile->first_name = request('first_name');
        $profile->last_name = request('last_name');
        $profile->date_of_birth = request('date_of_birth');
        $profile->mobile_number = request('mobile_number');
        $profile->avatar = $imageName;
        $profile->save();

        return redirect()->route('profile');

        // return $request->all();

        
    }


    public function accountSettings()
    {

        $settings = AccountSetting::where('user_id', Auth::id())->first();

        if ($settings->count() == 0 ) {
            AccountSetting::create([
                'user_id' => Auth::id(),
            ]);

            $settings = AccountSetting::where('user_id', Auth::id())->first();

            return view('app.profile.accountsettings', compact('settings'));

        } else {
            
            return view('app.profile.accountsettings', compact('settings'));
        }
    }

    public function accountSettingsUpdate(Request $request)
    {

        $settings = AccountSetting::where('user_id', Auth::id())->first();

        $settings->email_notification = request('email_notification');
        $settings->push_notification = request('push_notification');
        $settings->new_notification = request('new_notification');
        $settings->direct_message = request('direct_message');
        $settings->new_message = request('new_message');
        $settings->get_more = request('get_more');
        $settings->things_missed = request('things_missed');
        $settings->best_products = request('best_products');
        $settings->save();

        return redirect()->route('p.account.settings');
    }
}
