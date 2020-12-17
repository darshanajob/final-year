<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_customer_purchase extends Model
{
   protected $table = 'tbl_customer_purchase';
	protected $fillable =[ 
    'cusid',
    'c_name',
    'pr_name',
    'deposite',
         'j_Date',
          'due_Date',
           'payment_type',
         'Block_No',
     ];

/**     
     public function tbl_customer(){
      return $this->belongsTo('App\tbl_customer');
    }

         public function tbl_bank_loan(){
      return $this->hasMany('App\tbl_bank_loan');
    }

         public function tbl_full_cash(){
      return $this->hasMany('App\tbl_full_cash');
    }

         public function tbl_siz_months(){
      return $this->hasMany('App\tbl_siz_months');
    }

        public function tbl_siz_months(){
      return $this->hasMany('App\tbl_siz_months');
    }

    
       public function 4_years_plan(){
      return $this->hasMany('App\4_years_plan');
    }
    **/
}
