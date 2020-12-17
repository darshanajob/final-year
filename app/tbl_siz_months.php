<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_siz_months extends Model
{
  protected $table = 'tbl_siz_months';
    protected $fillable =[ 
   			
   			'Installments_free',
            'No_Installments',
          'due_date',
           'late_payment_free',
           'project_id',
          'b_No',
           'cusid',
        'dwn_pay',
           'with_out_dwn',
        'payment_prograss',
        'Total_payment',
        'Discount',
   			
            ];
    
}
