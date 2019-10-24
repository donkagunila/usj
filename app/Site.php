<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    static public function CountUsers()
    {
    	return User::count();
    }
}
