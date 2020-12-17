<?php

namespace App\Http\Controllers;

use App\tbl_property;
use App\tbl_project;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class PropertyController2 extends Controller
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
         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_property  $tbl_property
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_property  $tbl_property ,tbl_project $tbl_project ,$id)
    {
          //$tbl_property= DB::table('tbl_project')
        
        //->Where(function ($query) use($id) {
         //   $query->where('id', '=', $id);
       // })->get();
  if(Auth::check()){
$tbl_property= DB::table('tbl_project')->Where('id', '=', $id)->get();

     
                return view('tbl_property.show', ['tbl_property' => $tbl_property]); 
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
