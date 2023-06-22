<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
}
