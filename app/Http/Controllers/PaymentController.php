<?php

namespace App\Http\Controllers;

use App\tbl_customer_purchase;
use App\tbl_customer;
use App\tbl_project;
use App\tbl_property;
use App\tbl_full_cash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
        
        $tbl = tbl_customer_purchase::all();


            return view('tbl_payment.index', ['tbl'=> $tbl]);
             }else{
                 return view('Auth.login');
            }

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){

     
       $id = $request->input('txtidpay');

        $tbl_pay= DB::table('tbl_customer_purchase')->Where('id', '=', $id)->get();

        foreach ($tbl_pay as $tbl_pay) {
           $type =  $tbl_pay->payment_type; 
          
        }
        
       if($type == 'Full_cash'){
       
       }elseif($type == 'Bank_loan'){
      
       }elseif($type == '6Months_cash'){

        
        $tbl_pay= DB::table('tbl_siz_months')->Where('cusid', '=', $id)->get();

        foreach ($tbl_pay as $tbl_pay) {
           $pay_v1 =  $tbl_pay->Total_payment; 
           $pay_v2 =  $tbl_pay->payment_prograss; 
        }
         
        if($pay_v1 >= $pay_v2){
            $some = DB::table('tbl_customer_purchase')
            ->join('tbl_project', 'tbl_customer_purchase.pr_name', '=', 'tbl_project.id')
           ->join('tbl_siz_months', 'tbl_customer_purchase.id', '=', 'tbl_siz_months.cusid')
            ->select('tbl_customer_purchase.c_name','tbl_project.pj_name' ,'tbl_siz_months.Installments_free', 'tbl_siz_months.Total_payment','tbl_siz_months.payment_prograss','tbl_customer_purchase.id','tbl_customer_purchase.Block_No','tbl_customer_purchase.pr_name','tbl_customer_purchase.payment_type')->where('tbl_customer_purchase.id', '=',$id)
            ->get();

            return view('tbl_payment.create', ['some'=> $some]);
        }else{
           return view('tbl_payment.index');
        }

       }elseif($type == '4_years'){
    
        $tbl_pay= DB::table('tbl_4years_plan')->Where('cusid', '=', $id)->get();

        foreach ($tbl_pay as $tbl_pay) {
           $pay_v1 =  $tbl_pay->Total_price; 
           $pay_v2 =  $tbl_pay->payment_prograss; 
        }
         
        if($pay_v1 >= $pay_v2){
            $some = DB::table('tbl_customer_purchase')
            ->join('tbl_project', 'tbl_customer_purchase.pr_name', '=', 'tbl_project.id')
           ->join('tbl_4years_plan', 'tbl_customer_purchase.id', '=', 'tbl_4years_plan.cusid')
            ->select('tbl_customer_purchase.c_name','tbl_project.pj_name' ,'tbl_4years_plan.Installments_free', 'tbl_4years_plan.Total_price','tbl_4years_plan.payment_prograss','tbl_customer_purchase.id','tbl_customer_purchase.Block_No','tbl_customer_purchase.pr_name','tbl_customer_purchase.payment_type')->where('tbl_customer_purchase.id', '=', $id)
            ->get();

            return view('tbl_payment.four', ['some'=> $some]);
        }else{
           return view('tbl_payment.index');
        }
       }
         
 }else{
                 return view('Auth.login');
            }
        
          
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_customer_purchase  $tbl_customer_purchase
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_customer_purchase $tbl_customer_purchase ,$id)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_customer_purchase  $tbl_customer_purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
       
        
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_customer_purchase  $tbl_customer_purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_customer_purchase $tbl_customer_purchase)
    {
        
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_customer_purchase  $tbl_customer_purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_customer_purchase $tbl_customer_purchase)
    {
        //
    }
}
