<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:password|min:8',

        ]);

        if($request['password'] == $request['confirm_password']) {
            Auth::login($user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]));
            return redirect('/');
        }
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where("email",$request->email)->get();

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            $request->session()->regenerate();
            if($input['email']=="admin@gmail.com" && $input['password']=="admin123")
            {
                return redirect('/joblist');
            }
            else
            {

                $request->session()->put("user",$user[0]->id);
                return redirect('/userhome');
            }
        }
        else
        {
            return redirect('/')->with('error', 'Email/Password are Invalid.');
        }
    }

    public function logout()
    {
        return redirect('/');
    }

}
