<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use App\User;
use App\Chart;
use DB;

class ChartController extends Controller
{
    /**
     * Show the application dashboard.
     * 
     * @return \illuminate\Http\Response
     */

     public function chart()
     {
        $funds = DB::select('SELECT amount, MONTH(date) as month from funds');
        return view('chart')->with('funds', $funds);
     }
}
