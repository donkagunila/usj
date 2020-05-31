<?php

namespace Usajili;

use Usajili\User;

use Illuminate\Database\Eloquent\Model;

class AccountSetting extends Model
{
    protected $guarded = [];


    public function User()
    {
    	return $this->belongsTo(User::class);
    }

}
