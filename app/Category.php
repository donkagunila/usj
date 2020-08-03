<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];


    public static function status($status)
    {
    	switch ($status) {
    		case 1:
	    		return 'Active';
	    		break;
	    	case 2:
	    		return 'Disabled';
	    		break;
	    	default:
	    		return 'Active';
    	}
    }

    public static function CountCategories()
    {
    	return self::all()->count();
    }
}
