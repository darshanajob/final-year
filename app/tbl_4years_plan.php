<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_4years_plan extends Model
{
    protected $table = 'tbl_4years_plan';
    protected $fillable =[
    		'Total_price',
            'No_Installments',
            'Installments_free',
          	'cusid',
            'dwn_pay',
            'with_out_dwn',
            'Discount',

    ];
 
}
