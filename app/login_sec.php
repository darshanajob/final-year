<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login_sec extends Model
{
     protected $fillable =[
    		
            'Log_id',
            'Page',
            'Activity',
            'Login_time',
            'cusid',
    ];
      public function users(){
    	return $this->belongsTo('App\users');
    }
}
