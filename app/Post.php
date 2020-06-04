<?php

namespace Usajili;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

	protected $guarded = [];

    public function user()
    {
    	return $this->BelongsTo(User::class);
    }
}