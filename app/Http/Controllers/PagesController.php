<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function funds(){
        return view('funds');
    }

    public function index(){
        return view('agent.index');
    }

    public function chart(){
        return view('chart');
    }
}
