<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_bank_loan extends Model
{
  protected $table = 'tbl_bank_loan';
	 protected $fillable =[ 
   			 'project_id',
            'cus_job_type',
            'due_date',
            'deposit',
            'payment_starting_date',
           'total_payment',
           'cusid',
           'dwn_pay',
           'with_out_dwn',
            ];
            
         
}
