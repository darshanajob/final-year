<?php

namespace App\Http\Controllers;

use App\tbl_property;
use App\tbl_project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class PropertyController extends Controller
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
        $tbl_pro = tbl_property::create([
               

                    "block_no" => $request->input('cmbDis'),
                    "b_area" => $request->input('txtBar'),
                    "est_perch_price" => $request->input('txtEpr'),
                    "project_id" => $request->input('txtid'),
                  

             
            ]);

          if($tbl_pro){
                   return back()->withInput()->with('success', 'success creating new property');
            }else{
                   return back()->withInput()->with('errors', 'Error creating new property');
               }

         }else{
                 return view('Auth.login');
            }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_property  $tbl_property
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_property $tbl_property ,$id)

    {
  if(Auth::check()){
        
//echo $id;

       $tbl_property= DB::table('tbl_property')
        
        ->Where(function ($query) use($id) {
            $query->where('project_id', '=', $id);
        })->get();
        
        //echo $id;
        return view('tbl_property.index', ['tbl_property' => $tbl_property]); 
         }else{
                 return view('Auth.login');
            }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_property  $tbl_property
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_property $tbl_property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_property  $tbl_property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_property $tbl_property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_property  $tbl_property
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_property $tbl_property)
    {
        //
    }

   
}
