<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function Items(){
        return view('items.index');
    }
}
