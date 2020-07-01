<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    //
    public function Master(){
        return view('master');
    }
    public function Task(){
        return view('task');
    }
    public function Data(){
        return view('data');
    }
}
