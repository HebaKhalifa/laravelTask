<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    function create()
    {
        return view('createAccount');
    }


    function submit(Request $req)
    {

        $data = $this->validate($req, [
            'name' => 'required | min:8 | max: 30',
            'mail' => 'required | email',
            'age' => 'required | integer',
            'phone' => 'required | min:10',
            'password' => 'required | min:8',
            'nationalId' => 'required | digits: 14',
            'address' => 'required | max: 50',
            'about_user' => 'nullable  | max: 100', //if it is null, passes the validation
                                                    // but there is a database error because
                                                    // the column can't be null
        ]);
        $data['password']=bcrypt($data['password']);
        User::create($data);
        return view('profile', $req->all());
    }

    function display()
    {
        $data = User::get();
        return view('display', ['data' => $data]);
    }

    function delete(Request $req)
    {
        User::where('id', $req->id)->delete();
        return redirect('display');
    }
}
