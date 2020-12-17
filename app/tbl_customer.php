<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_customer extends Model
{
  protected $table = 'tbl_customer'; 
  protected $fillable =[ 
    'full_name',
           'nic',
           'p_addr',
           'p_tele',
          'job',
          'o_addr',
            'o_tele',
           'citizenship',
           'age',
           'income',
            'income_tax',
           'dependents',
           'j_Date',
           'Mnthly_incme',
            'road_image',
          ];
/**
           public function tbl_customer_purchase(){
      return $this->hasMany('App\tbl_customer_purchase');
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
