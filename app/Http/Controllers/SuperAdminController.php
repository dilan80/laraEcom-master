<?php

namespace App\Http\Controllers;

use Dotenv\Result\Result;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Session;
session_start();

class SuperAdminController extends Controller
{
    public function logout()
    {
        //Session()->put('username', null);
        session()->flush();
        return redirect('/admin-side');
    }
}
