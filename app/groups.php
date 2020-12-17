<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
     protected $fillable =[
    		'name',
            'permissions',
    ];

     public function users(){
    	return $this->belongsTo('App\users');
    }

}
