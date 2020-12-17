<?php

namespace App\Http\Controllers;

use App\tbl_project;
use App\tbl_district;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
        $tbl_project = DB::table('tbl_project')
            ->join('tbl_district', 'tbl_project.district_id', '=', 'tbl_district.id')
            ->select('tbl_project.pj_name', 'tbl_project.id', 'tbl_project.pj_id', 'tbl_project.location', 'tbl_project.no_of_blocks', 'tbl_district.district')
            ->get();
            return view('tbl_project.index', ['tbl_projects'=> $tbl_project]);
            }else{
                 return view('Auth.login');
            }

    }


       public function testing()
    {
          if(Auth::check()){
        $tbl_project = DB::table('tbl_project')
            ->join('tbl_district', 'tbl_project.district_id', '=', 'tbl_district.id')
            ->select('tbl_project.pj_name', 'tbl_project.id', 'tbl_project.pj_id', 'tbl_project.location', 'tbl_project.no_of_blocks', 'tbl_district.district')
            ->get();
            return view('tbl_project.send', ['tbl_projects'=> $tbl_project]);
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
        if(Auth::check()){
        $tbl_project = tbl_district::all();
        return view('tbl_project.create', ['tbl_project'=> $tbl_project]);
            }else{
                 return view('Auth.login');
            }
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
        
            $tbl_project = tbl_project::create([
               

                    "district_id" => $request->input('cmbDis'),
                    "location" => $request->input('txtPLoca'),
                    "pj_name" => $request->input('txtPName'),
                    "tot_area" => $request->input('txtTotArea'),
                    "no_of_blocks" => $request->input('txtNoBlock'),
                    "M_unit" => $request->input('cmbmunit')

             
            ]);


            if($tbl_project){
                   return back()->withInput()->with('success', 'success creating new project');
            }else{
                   return back()->withInput()->with('errors', 'Error creating new project');
               }

                 }else{
                 return view('Auth.login');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tbl_project  $tbl_project
     * @return \Illuminate\Http\Response
     */
    public function show(tbl_project $tbl_project)
    {
        //
        //$tbl_project = tbl_project::where('id', $tbl_project);


        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tbl_project  $tbl_project
     * @return \Illuminate\Http\Response
     */
    public function edit(tbl_project $tbl_project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tbl_project  $tbl_project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tbl_project $tbl_project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tbl_project  $tbl_project
     * @return \Illuminate\Http\Response
     */
    public function destroy(tbl_project $tbl_project)
    {
        //
    }
}
