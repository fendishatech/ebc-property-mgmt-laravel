<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['username' => $req->username])->first();

        $validatedData = $req->validate([
            'username' => ['required'],
            'password' => ['required']
        ]);

        if ($validatedData) {
            if ($user && Hash::check($req->password, $user->password)) {
                // success
                $req->session()->put('user', $user);
                return redirect("/home");
            } else {
                return redirect()->back()->withErrors([
                    'custom_error' => 'Wrong password or username!',
                ])->withInput();
            }
        } else {
            return redirect()->back()->withErrors("Wrong password or username!")->withInput();
        }
    }

    function changePassword(Request $req)
    {
        $validatedData = $req->validate([
            'password' => 'required',
            'new_password' => 'required|min:6|max:20|regex:/[A-Z]/|regex:/[a-z]/|regex:/[0-9]/|regex:/[@$!%*?&]/',
            'confirm_password' => 'required|same:new_password',
        ]);

        if ($validatedData) {
            if (Session::has('user')) {
                // get current user id
                $id = Session::get('user')['id'];
                // check old password
                $user = User::where(['id' => $id])->first();

                if ($user && Hash::check($req->password, $user->password)) {
                    // check if new password is confirmed
                    if ($req->new_password == $req->confirm_password) {
                        // change password
                        $user->password = $req->new_password;
                        $user->save();
                        return redirect('/');
                    } else {
                        return "Passwords did not match";
                    }
                } else {
                    return "password is incorrect";
                }
            } else {
                return redirect('/');
            }
        } else {
            return redirect()->back()->withErrors("Password Format is incorrect");
        }
    }
}
