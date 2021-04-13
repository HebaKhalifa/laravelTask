<?php

namespace App\Http\Controllers;
use App\Models\Article;
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


    function create(){
        return view('addArticle');
    }

    function submit(Request $req){
        $data=$this->validate($req,[
            'title'=>'required | min:8 | max: 30',
            'content'=>'required | max:100',
        ]);
        Article::create($data);
        echo "data inserted";
        return redirect('displayArticles') ;
    }

    function display(){
        $data =Article::get();
        return view('displayArticles', ['data' => $data]);
    }

    function edit(Request $req)
    {
        $article=Article::find($req->id);
        // dd($user);
        return view('editArticle',['user'=>$article]);
    }

    function update(Request $req){
        $data=$this->validate($req,[
            'title'=>'required | min:8 | max: 30',
            'content'=>'required | max:100',
        ]);

        $op=Article::where('id',$req->id)->update($data);
        if($op){
            echo "Done";
        }else{
            echo "don't";
        }
    }

}
