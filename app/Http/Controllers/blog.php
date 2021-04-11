<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blog extends Controller
{
    function startBlog(Request $req){
        $id=$req->id;
        $name=$req->name;
        $mail=$req->mail;
        $title=$req->title;
        return view('UserData',['id'=>$id,'name'=>$name,'mail'=>$mail, 'title'=>$title]);
        // echo "welcome to Our Blog";
    }
}
