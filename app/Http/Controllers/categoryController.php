<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function all_cat(){
        return view('admin.allCategory');
    }
}
