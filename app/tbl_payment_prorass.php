<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_payment_prorass extends Model
{
protected $table = 'tbl_payment_prorass'; 
       protected $fillable =[
    		'cusid',
      '4_year_id',
       'due_date',
      'settle_date',
       'over_due_amount',
       'paid_amount',
      'over_due',
      'payment_prograss',
           
    ];
    
   
}
