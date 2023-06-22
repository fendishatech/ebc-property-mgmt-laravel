<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\StoreItem;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    function index(Request $req)
    {
        $currentDateTime = Carbon::now();
        $currentDay = $currentDateTime->format('l');
        $currentDate = $currentDateTime->format('F j, Y');
        $currentTime = $currentDateTime->format('h:i A');

        $user = User::where(['username' => $req->username])->first();
        $users = User::all();
        $items = Item::all();
        $storeItems = StoreItem::all();
        return view('dashboard/index', [
            'items' => $items,
            'storeItems' => $storeItems,
            'users' => $users,
            'user' => $user,
            'currentDay' => $currentDay,
            'currentDate' => $currentDate,
            'currentTime' => $currentTime,
        ]);
    }
}
