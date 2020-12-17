<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_customer_bank extends Model
{
   protected $fillable =[ 
           'cusid',
          'b_name',
         'b_addr',
        'b_acc',
    ];

     public function tbl_customer(){
    	return $this->belongsTo('App\tbl_customer');
    }
}
