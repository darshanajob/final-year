<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_project_discount extends Model
{
   protected $table = 'tbl_project_discount';
       protected $fillable =[ 
   			
   			'pj_id',
        'perch_S_amount',
     'perch_E_amount',
          'discount_amount',
            'Plan_name',
            ];

             //public function tbl_property(){
   //   return $this->belongsTo('App\tbl_property');
   // }
}
