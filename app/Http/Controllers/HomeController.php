<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\StoreItem;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $req)
    {
        $user = User::where(['username' => $req->username])->first();
        $users = User::all();
        $items = Item::all();
        $storeItems = StoreItem::all();
        return view('dashboard/index', ['items' => $items, 'storeItems' => $storeItems, 'users' => $users, 'user' => $user]);
    }
}
