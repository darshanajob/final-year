<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_property extends Model
{
  protected $table = 'tbl_property';
     protected $fillable =[ 
   			
   		'project_id',
   		'block_no',
       'b_area',
          'est_perch_price',
        'status',
         'Selling_perch_price',
            ];

                 /** public function tbl_project(){
      return $this->belongsTo('App\tbl_project');
    }

          public function tbl_customer_purchase(){
      return $this->hasMany('App\tbl_customer_purchase');
    } **/
}
