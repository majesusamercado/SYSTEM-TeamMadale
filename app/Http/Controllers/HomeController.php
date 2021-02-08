<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
class HomeController extends Controller
{

    public function delete(){
        return view('delete');
    }

    public function process(){
        return view('process');
    }

    public function prod(){
        return view('prod');
    }


    public function insertData(Request $request){
        
        $prod_id = $request->input('prod_id');
        $prod_name = $request->input('prod_name');
        $prod_price = $request->input('prod_price');
        $prod_quantity = $request->input('prod_quantity');
       
        DB::INSERT("INSERT into tblprod (prod_id,prod_name,prod_price,prod_quantity)VALUES(?,?,?,?)", [$prod_id,$prod_name,$prod_price,$prod_quantity]);

        return view('prod');
    }


    public function homes(){
        return view('homes');
    }

    public function inserData(Request $request){
        
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $uname = $request->input('uname');
        $password = $request->input('password');
       
        DB::INSERT("INSERT into tblregister(fname,lname,uname,password)VALUES(?,?,?,?)", [$fname,$lname,$uname,$password]);


        return view('homes');
    }


    public function logins(){
        return view('logins');
    }

    public function displayData(Request $request){
        //initialization

        $u = $request->input('usname');
        $p = $request->input('pass');

       $data= DB::SELECT('SELECT uname from tblregister where uname=? and password=?' , [$u,$p]);

       if (count($data))

       {
        return view('prod');
       }
       else {
        return view('logins');
       }
   }
}