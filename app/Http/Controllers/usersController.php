<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::get();
        return view('users.display', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.createAccount');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $this->validate($request, [
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
        
        return view('users.profile', $request->all());
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
        $user=User::find($id);
        return view('edit',['user'=>$user]);
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
        $data=$this->validate($request,[
            'title'=>'required | min:8 | max: 30',
            'content'=>'required | max:100',
        ]);

        $op=User::where('id',$id)->update($data);
        if($op){
            echo "Done";
        }else{
            echo "don't";
        }
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
