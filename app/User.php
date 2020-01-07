<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Profile;



class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Profile()
    {
        return $this->hasOne(Profile::class);
    }

    public static function is_vendor($status)
    {
        switch ($status) {
            case 1:
                return 'Vendor';
                break;
            
            default:
                return 'User';
                break;
        }
    }


     public function Vrequest()
    {
        return $this->hasOne(Vrequest::class);
    }
}
