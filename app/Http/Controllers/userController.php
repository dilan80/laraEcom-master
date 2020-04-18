<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Admin;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['result']=DB::table('admin')->get();
        if(count($result)> 0){
            return view('admin.user',$result);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'inputfirstname' => 'required|min:3|max:50',
            'inputlastname' => 'required|min:3|max:50',
            //'inputaddress' => 'required|min:3|max:350',
            'inputemail' => 'email',
            'inputusername' => 'required|min:3|max:50',

        ]);

            $username = $request->input("inputusername");
            $first_name = $request->input('inputfirstname');
            $last_name = $request->input('inputlastname');
            $password = md5($request->input("password"));
            $email = $request->input("inputemail");
            $nic = "hj";
            $data=array('username'=>$username,'first_name'=>$first_name,"last_name"=>$last_name,"password"=>$password,"email"=>$email,"nic"=>$nic);
            DB::table('admin')->insert($data);

                return redirect('/all-user');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
