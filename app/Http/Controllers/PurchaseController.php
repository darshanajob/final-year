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

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $tbl = DB::table('tbl_customer_purchase')
           // ->join('tbl_customer', 'tbl_customer_purchase.id', '=', 'tbl_customer.id')
          // ->join('tbl_project', 'tbl_customer_purchase.pr_name', '=', 'tbl_project.id')
           // ->select('tbl_customer.full_name','tbl_customer.id' ,'tbl_customer_purchase.Block_No',  'tbl_project.pj_name')
         //  ->get();
        //   $tbl_property = tbl_property::all();
        $tbl = tbl_customer_purchase::all();


            return view('tbl_customer_purchase.index', ['tbl'=> $tbl]);


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

        $id = $request->input('cmbBlock');

         $tbl_pay= DB::table('tbl_customer_purchase')->Where('id', '=', $id)->get();

        foreach ($tbl_pay as $tbl_pay) {
           $pay_v1 =  $tbl_pay->pr_name;
            $pay_v2 =  $tbl_pay->Block_No; 
         
        }
       

            $tbln = DB::table('tbl_customer_purchase')
            ->join('tbl_project', 'tbl_customer_purchase.pr_name', '=', 'tbl_project.id')
            ->join('tbl_property', 'tbl_project.id', '=', 'tbl_property.project_id')
             ->join('tbl_project_discount', 'tbl_project.id', '=', 'tbl_project_discount.pj_id')
            ->select('tbl_customer_purchase.c_name', 'tbl_customer_purchase.id','tbl_project.pj_name', 'tbl_property.b_area', 'tbl_property.est_perch_price', 'tbl_project_discount.discount_amount','tbl_customer_purchase.Block_No')
            ->where('tbl_customer_purchase.id', '=',$id)
            ->where('tbl_property.project_id', '=',$pay_v1)
            ->where('tbl_property.Block_No', '=',$pay_v2)
            ->get();
            
            

            

            return view('tbl_customer_purchase.create', ['tbln'=>$tbln]);  

         

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
        if(Auth::check()){
        $id = $request->input('txtcusname');
        echo $id;
         }else{
                 return view('Auth.login');
            }
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
