<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
// use App\Models\AdminUser;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //it checks weather the user is logged in or not and if not it redirect to login page else to user page
    public function index()
    {
        // if(Auth::guest()){
        //     return redirect()->route('login.index');
        // }else{
        $users = User::find(1);
        return view('user.display', compact('users'));
        // }
    }

    //redirect it to the edit user page if the passed user detail is not null
    public function edit(User $user)
    {
        if (is_null($user)) {
            return redirect('admin.display');
        } else {
            return view('user.edit', compact('user'));
        }
    }

    //change the data stored in the database through form while updating the user details
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $updateUser = User::findorFail($id);
        $updateUser->name = $request->name;
        $updateUser->email = $request->email;
        $updateUser->password = bcrypt($request['password']);
        $updateUser->save();
        return redirect()->route('user.index')->with('success', 'users Data Updated Successfully');
    }

    //redirect to the login page
    public function loginIndex()
    {
        return view('login');
    }

    //validate the email and password and if email and the password matches it redirect to the package display page else stay in same login page
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);


        $credentials = User::where('email', '=', $request->email)->first();
        if (!$credentials) {
            return back()->with('success', 'email address doesnot match');
        } else {
            if (Hash::check($request->password, $credentials->password)) {
                $data = $request->input();
                $request->session()->put('user',$data['email']);
                return redirect()->route('pakages.display');
            } else {
                return redirect()->route('login.index')->with('success', 'incorrect password given');
            }
        }
    }
    public function Logout(Request $request){
        session()->forget('user');
        return redirect("/")->with('success', 'logout Successfully');
    }
}
