<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
            $users = AdminUser::find(1);
            return view('user.display', compact('users'));
    }

    public function edit(AdminUser $user)
    {
        if(is_null($user)){
            return redirect('admin.display');
        }else{
            return view('user.edit',compact('user'));
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>['required','string'],
            'email'=>['required','email'],
            'password' => ['required'],
        ]);
        
        $updateUser = AdminUser::findorFail($id);
        $updateUser->name = $request->name;
        $updateUser->email = $request -> email;
        $updateUser->password=bcrypt($request['password']);
        $updateUser->save();
        return redirect()->route('user.index')->with('success','Day Data Updated Successfully');
    }

    public function loginIndex(){
        return view('login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        
        $credentials = AdminUser::where('email','=',$request->email)->first();
        if(!$credentials){
            return back()->with('success','email address doesnot match');
        }else{
            if(Hash::check($request->password,$credentials->password)){
                return redirect()->route('pakages.display');
            }else{
                return redirect()->route('login.index')->with('success','incorrect password given');
            }
        }
    }
}
