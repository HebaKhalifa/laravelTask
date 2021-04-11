<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function create(){
        return view('createAccount');
    }


    function submit(Request $req){

        $this->validate($req,[
            'name'=>'required | min:8 | max: 30',
            'mail'=>'required | email',
            'age'=>'required | integer',
            'phone'=>'required | min:10',
            'pass'=>'required | min:8',
            'nationalId'=>'required | min:14 | max: 14',
            // 'nationalId'=>'required | size: 14',  ******** don't never match . why???
            'address'=>'required | max: 50',
            'about'=>'required | min:30 | max: 100',
        ]);
        return view('profile',$req->all());
        
    }




}
