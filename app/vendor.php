<?php

namespace Usajili;

use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    public static function countall()
    {
    	return self::all()->count();
    }
}
