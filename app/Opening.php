<?php

namespace Usajili;

use Illuminate\Database\Eloquent\Model;

class Opening extends Model
{
    protected $guarded = [];

    public static function CountOpening()
    {
    	return self::all()->count();
    }
}
