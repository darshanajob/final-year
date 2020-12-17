<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class LiveSearch extends Controller
{
     function index()
    {
     return view('tbl_customer.live_search');
    }

    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('tbl_customer_purchase')
            ->join('tbl_customer', 'tbl_customer_purchase.id', '=', 'tbl_customer.id')
            ->join('tbl_project', 'tbl_customer_purchase.pr_name', '=', 'tbl_project.id')
            ->select('tbl_customer.full_name', 'tbl_customer.nic','tbl_customer.p_addr', 'tbl_customer.p_tele', 'tbl_customer.job', 'tbl_customer_purchase.Block_No', 'tbl_customer_purchase.payment_type', 'tbl_project.pj_name')
         ->where('full_name', 'like', '%'.$query.'%')
         ->orWhere('nic', 'like', '%'.$query.'%')
         ->orWhere('p_addr', 'like', '%'.$query.'%')
         ->orWhere('job', 'like', '%'.$query.'%')
         ->orWhere('payment_type', 'like', '%'.$query.'%')
         ->get();
         
      }
      else
      {
       $data =   DB::table('tbl_customer_purchase')
            ->join('tbl_customer', 'tbl_customer_purchase.id', '=', 'tbl_customer.id')
            ->join('tbl_project', 'tbl_customer_purchase.pr_name', '=', 'tbl_project.id')
            ->select('tbl_customer.full_name', 'tbl_customer.nic','tbl_customer.p_addr', 'tbl_customer.p_tele', 'tbl_customer.job', 'tbl_customer_purchase.Block_No', 'tbl_customer_purchase.payment_type', 'tbl_project.pj_name')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->full_name.'</td>
         <td>'.$row->nic.'</td>
         <td>'.$row->p_addr.'</td>
         <td>'.$row->job.'</td>
         <td>'.$row->payment_type.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
