<?php

namespace App\Http\Controllers;

use App\tbl_customer;
use App\tbl_project;
use App\tbl_customer_purchase;
use App\tbl_property; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $tbl_customer = tbl_customer::all();

      //  return view('tbl_customer.index', ['tbl_customer'=> $tbl_customer]);

        if(Auth::check()){
         $tbl_customer = DB::table('tbl_customer_purchase')
            ->join('tbl_customer', 'tbl_customer_purchase.id', '=', 'tbl_customer.id')
            ->join('tbl_project', 'tbl_customer_purchase.pr_name', '=', 'tbl_project.id')
            ->select('tbl_customer.full_name', 'tbl_customer.p_addr', 'tbl_customer.p_tele', 'tbl_customer.job', 'tbl_customer_purchase.Block_No', 'tbl_customer_purchase.payment_type', 'tbl_project.pj_name')
            ->get();
            $madutuwa = 1;

            $notdone = tbl_customer::all();
            
            return view('tbl_customer.index', ['tbl_customer'=> $tbl_customer,'notdone'=>$notdone]);

            }else{
                 return view('Auth.login');
            }
    }

    public function getPositions($id)
    {
        if (Request::ajax())
        {
            $positions = DB::table('tbl_property')->select('tbl_property','block_no')->where('project_id', '=', $id)->get();
            return Response::json( $positions );
        } 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(tbl_customer $tbl_customer,tbl_project $tbl_project )
    {
        //
        $tbl_customer = tbl_project::all();

         

         return view('tbl_customer.create', ['tbl_customer'=> $tbl_customer]);
    }

    public function showDashboard()
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
            $tbl_customer = tbl_customer::create([
                "full_name" => $request->input('txtFn'),
                    "name" => $request->input('txtUsuN'),
                    "nic" => $request->input('txtNIC'),
                    "p_addr" => $request->input('txtPAdd'),
                    "p_tele" => $request->input('txtPTel'),
                    "job" => $request->input('txtJob'),
                  //  "employer" => $request->inputt('txtJobEmp'),
                    "o_addr" => $request->input('txtOAdd'),
                    "o_tele" => $request->input('txtOTel'),
            // "recidence_mode" => Input::get('rbtMdRec'),
                    "citizenship" => $request->input('rbtCitiz'),

                    "age" => $request->input('txtAge'),
                   // "credit_ref" => Input::get('txtCreR'),
                    "Mnthly_incme" => $request->input('txtMonInc'),
                    "income" => $request->input('txtHWInc'),
                    "income_tax" => $request->input('cmbCredit'),
                   // "type" => Input::get('rbtTitle'),
                    "dependents" => $request->input('txtNoDepe'),
                    "j_Date" => date("Y-m-d H:i:s"),

             
            ]);

             $tbl_customer_purchase = tbl_customer_purchase::create([

                "pr_name" => $request->input('cmbProject'),
            
                    "j_Date" => date("Y-m-d H:i:s"),
                 
                    "c_name" => $request->input('txtFn'),
                 
                      "Block_No" => $request->input('cmbBlock'),

                ]);   


            if($tbl_customer){
                   return back()->withInput()->with('success', 'success creating new customer');
            }else{
                   return back()->withInput()->with('errors', 'Error creating new customer');
               }

     }else{
                 return view('Auth.login');
            }
    }

        
        
     
    

 public function ReceiveDataForm(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_customer  $tbl_customer
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_customer $tbl_customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_customer  $tbl_customer
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_customer $tbl_customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_customer  $tbl_customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_customer $tbl_customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_customer  $tbl_customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_customer $tbl_customer)
    {
        //
    }
}
