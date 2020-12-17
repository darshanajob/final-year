<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_district extends Model
{
	 protected $table = 'tbl_district';
    protected $fillable =[ 
		'district',
    ];

    public function tbl_project(){
    	return $this->belongsTo('App\tbl_project');
    }   
}
