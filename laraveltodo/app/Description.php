<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
   public function mylist()
	{
		return $this->belongsTo('App\mylist');
	}

}
