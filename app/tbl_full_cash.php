<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_full_cash extends Model
{
  protected $table = 'tbl_full_cash';
    protected $fillable =[ 
    	'cusid',
           
          'project_id',
           'block_no',
          'Total_price',
       'Discount',
     'Total_selling_price',
    ];

  
}
