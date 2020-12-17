<?php

namespace App\Http\Controllers;

use App\tbl_customer_purchase;
use App\tbl_customer;
use App\tbl_project;
use App\tbl_property;
use App\tbl_full_cash;
use App\tbl_siz_months;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class FouryearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     

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

      echo $monpay = $request->input('mpayment');
       echo $ids = $request->input('txtid');

         $puka = DB::table('tbl_4years_plan')->Where('cusid', '=', $ids)->get();

        foreach ($puka as $puka) {
           $lastpay =  $puka->payment_prograss; 
            
        }

        $testmonpay =  $lastpay +  $monpay;

         $four =  DB::table('tbl_4years_plan')
            ->where('cusid', $ids)
            ->update(['payment_prograss' => $testmonpay ]);

             if($four){
                   return back()->withInput()->with('success', 'success creating new payment');
            }else{
                   return back()->withInput()->with('errors', 'Error creating new payment');
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
