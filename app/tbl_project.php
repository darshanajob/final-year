<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_project extends Model
{
  protected $table = 'tbl_project'; 
    protected $fillable =[ 
   			'pj_id',
           'district_id',
           'location',
     'tot_area',
       'pj_name',
        'no_of_blocks',
            ];

         /**    public function tbl_customer_purchase(){
    	return $this->hasMany('App\tbl_customer_purchase');
    }**/
}
