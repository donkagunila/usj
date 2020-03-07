<?php

namespace App;

use App\User;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    use Notifiable;

    public function User()
    {
    	return $this->belongsTo(User::class);
    }

   
}
