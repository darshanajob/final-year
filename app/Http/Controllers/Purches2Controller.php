<?php

namespace App\Http\Controllers;

use App\tbl_customer_purchase;
use App\tbl_full_cash;
use App\tbl_bank_loan;
use App\tbl_siz_months;
use App\tbl_4years_plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class Purches2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $id = $request->input('txtid');
        $name = $request->input('txtcusname');
        $amount = $request->input('selpr');
        $type = $request->input('paytype');
        $B_no = $request->input('blck');
        $discount = $request->input('discount');
        $area = $request->input('blckArea');
        $refund = 25000;
        $down_pay = 4;
        $support = 3;

        $months = 6;
        $years  = 48;

        if($type == 'Full_cash'){

           $totpayment = $area * $amount;

           $totpayre  = $totpayment - $refund;

           $final  = $totpayre - $discount;



            $tbl_customer_purchase = tbl_full_cash::create([

                "cusid" => $id,
            
                'block_no' => $B_no,
                 
                'Total_price' => $totpayre,
                 
                'Discount' => $discount,
            
                'Total_selling_price' => $final,

                ]);
           
           DB::table('tbl_customer_purchase')
            ->where('id', $id)
            ->update(['deposite' => $refund ,'payment_type' => $type]);

          
            if($tbl_customer_purchase){
                   return back()->withInput()->with('success', 'success creating new paymet plan');
            }else{
                   return back()->withInput()->with('errors', 'Error creating new paymet plan');
               }
         
          

        }elseif($type == 'Bank_loan'){


            $totpayment = $area * $amount;

           $totpayre  = $totpayment - $refund;

           $final  = $totpayre - $discount;

           $with_out_dwn =  $final;           

           $final2 = $final /  $down_pay;

           $dwn_pay = $final2;



           $final3 = $final2 * $support;

            $tbl_customer_purchase = tbl_bank_loan::create([

                "cusid" => $id,
                
                'block_no' => $B_no,
                 
                'Discount' => $discount,
            
                'total_payment' => $final3,

                'dwn_pay' => $dwn_pay,

                'with_out_dwn' => $with_out_dwn,

                'deposit' => $refund,

                "due_date" => date('y/m/d', strtotime('+3 months')) 

                ]);
           
           DB::table('tbl_customer_purchase')
            ->where('id', $id)
            ->update(['deposite' => $refund,'payment_type' => $type]);

           
             if($tbl_customer_purchase){
                   return back()->withInput()->with('success', 'success creating new paymet plan');
            }else{
                   return back()->withInput()->with('errors', 'Error creating new paymet plan');
               }

        }elseif($type == '6Months_cash'){
            
             $totpayment = $area * $amount;

           $totpayre  = $totpayment - $refund;

           $final  = $totpayre - $discount;

           $final2 = $final /  $down_pay;

           $final3 = $final2 * $support;

           $test6 = $final3 / $months;

            $tbl_customer_purchase = tbl_siz_months::create([

                "cusid" => $id,
                
                'b_No' => $B_no,
                 
            
                'Total_payment' => $final3,

                'dwn_pay' => $final2,

                'with_out_dwn' => $final,

                'Installments_free' => $test6,

                'deposit' => $refund,

                "due_date" => date('y/m/d', strtotime('+6 months')), 
                "Discount" => $discount

                ]);
           
           DB::table('tbl_customer_purchase')
            ->where('id', $id)
            ->update(['deposite' => $refund,'payment_type' => $type]);

               if($tbl_customer_purchase){
                   return back()->withInput()->with('success', 'success creating new paymet plan');
            }else{
                   return back()->withInput()->with('errors', 'Error creating new paymet plan');
               }

        }elseif($type == '4_years'){

              $totpayment = $area * $amount;

           $totpayre  = $totpayment - $refund;

           $final  = $totpayre - $discount;

           $final2 = $final /  $down_pay;

           $final3 = $final2 * $support;

           $test6 = $final3 / $years;

            $tbl_customer_purchase = tbl_4years_plan::create([

                "cusid" => $id,
                
                'b_No' => $B_no,
                 
            
                'Total_price' => $final3,

                'dwn_pay' => $final2,

                'with_out_dwn' => $final,

                'Installments_free' => $test6,

                'deposit' => $refund,

                "due_date" => date('y/m/d', strtotime('+48 months')), 
                "Discount" => $discount

                ]);
           
           DB::table('tbl_customer_purchase')
            ->where('id', $id)
            ->update(['deposite' => $refund,'payment_type' => $type]);

               if($tbl_customer_purchase){
                   return back()->withInput()->with('success', 'success creating new paymet plan');
            }else{
                   return back()->withInput()->with('errors', 'Error creating new paymet plan');
               }
            

        }
        
     //   DB::table('tbl_customer_purchase')
      //      ->where('id', $id)
       //     ->update(['c_name' => $name]);

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
    public function show(tbl_customer_purchase $tbl_customer_purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_customer_purchase  $tbl_customer_purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_customer_purchase $tbl_customer_purchase)
    {
        //
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
        $dare = $request->input('txtcusname');

         echo $dare;
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
