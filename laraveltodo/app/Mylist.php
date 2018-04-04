<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mylist extends Model
{
    protected $table = 'mylists';

    public function descriptions()
    {
    	return $this->hasMany('App\description');
    }
}


	