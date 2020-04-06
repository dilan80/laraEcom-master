<?php

namespace App\Http\Controllers;

use Dotenv\Result\Result;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Session;
session_start();


class adminController extends Controller
{
   public function index(){
       return view('admin_login');
   }

   public function show_dash(){
       return view('admin.admin_dashboard');
   }

   public function dashboard(Request $request)
   {
       $admin_username=$request->username;
       $admin_password=md5($request->password);
       $result=DB::table('admin')
                ->where('username',$admin_username)
                ->where('password',$admin_password)
                ->first();
                  if($result)
                  {
                    $request->session()->put('username', $result->username);
                    $request->session()->put('email', $result->email);
                    return redirect('/dashboard');
                  }
                  else
                  {
                    $request->session()->put('Message', 'username or password incorrect');
                    return redirect('/admin-side');
                  }
   }
}
