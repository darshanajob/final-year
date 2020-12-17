<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class receipt extends Model
{
   protected $fillable =[ 
    'Day',
    'ConNo',
    'Sex',
    'Of',
    'Cash_Cheque_No',
    'Drawn',
    'being',
    'Rs',
    'cusid',
     ];

      public function tbl_customer_purchase(){
        return $this->belongsTo('App\tbl_customer_purchase');
    }
}
