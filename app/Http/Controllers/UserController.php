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

        if ($user && Hash::check($req->password, $user->password)) {
            // success
            $req->session()->put('user', $user);
            return redirect("/home");
        } else {
            return "Username or password is incorrect";
        }
    }

    function changePassword(Request $req)
    {
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
    }
}
