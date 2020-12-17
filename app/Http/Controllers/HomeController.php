<?php

namespace App\Http\Controllers;

use App\tbl_project;
use App\tbl_district;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
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
}
