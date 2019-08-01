<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FundsInsertController extends Controller
{
    public function insertform (){
        return view('funds');
    }

    public function insert (Request $request){
        $donor = $request->input('donor');
        $amount = $request->input('amount');
        $date = $request->input('date');
        $receiver = $request->input('receiver');

        $data = array('donor'=>$donor,"amount"=>$amount,"date"=>$date,"receiver"=>$receiver);

        DB::table('funds')->insert($data);

        echo "Record inserted successfully.....";
        return redirect('funds');
    }
}
