<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_customer_spouse extends Model
{
	protected $fillable =[ 
    'cusid',
's_name',
          's_job',
           's_o_addr',
          's_tele',
          's_income',
      ];

      public function tbl_customer(){
        return $this->belongsTo('App\tbl_customer');
    }
}
