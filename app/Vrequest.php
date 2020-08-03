<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vrequest extends Model
{
    protected $guarded = [];

    public function User()
    {
    	return $this->belongsTo(User::class);
    }

    public static function Countall()
    {
    	return self::all()->count();
    }
}
