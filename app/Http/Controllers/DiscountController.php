<?php

namespace App\Http\Controllers;

use App\tbl_project_discount;
use App\tbl_project;
use App\tbl_district;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if(Auth::check()){
          $tbl_project_discount = tbl_project::all();
            return view('tbl_project_discount.index', ['tbl_project_discount'=> $tbl_project_discount]);

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
          $tbl_project_dis = tbl_project_discount::create([
               

                    "pj_id" => $request->input('cmbDis'),
                    "perch_S_amount" => $request->input('txtPA'),
                    "perch_E_amount" => $request->input('txtPA2'),
                    "discount_amount" => $request->input('txtdis'),
                    "Plan_name" => $request->input('cmbtype'),
                   

             
            ]);


            if($tbl_project_dis){

               $tbl_project_discount = DB::table('tbl_project_discount')
            ->join('tbl_project', 'tbl_project_discount.pj_id', '=', 'tbl_project.id')
            ->select('tbl_project.pj_name', 'tbl_project_discount.perch_S_amount', 'tbl_project_discount.perch_E_amount', 'tbl_project_discount.discount_amount', 'tbl_project_discount.Plan_name')
            ->get();
              return view('tbl_project_discount.show', ['tbl_project_discount'=> $tbl_project_discount]);

            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_project_discount  $tbl_project_discount
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_project_discount $tbl_project_discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_project_discount  $tbl_project_discount
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_project_discount $tbl_project_discount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_project_discount  $tbl_project_discount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_project_discount $tbl_project_discount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_project_discount  $tbl_project_discount
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_project_discount $tbl_project_discount)
    {
        //
    }
}
