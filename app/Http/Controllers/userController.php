<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
     public function all_user(){
        $result['result']=DB::table('admin')->get();
        if(count($result)> 0){


            return view('admin.User.user',$result);

     }



    }
}