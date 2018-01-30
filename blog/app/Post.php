<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
	protected $fillable = [
        'title', 'text', 'user_id',
    ];



    //Solicitacao hasone user
	public function user()
	{
		return $this->belongsTo('App\User');
	}

}
