<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items =
            DB::table('categories')
            ->join('items', 'categories.id', '=', 'items.categoryId')
            ->select('items.*', 'categories.name AS cat_name')
            ->get();

        return view('items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('items.new', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Item();

        $item->item_name = $request->item_name;
        $item->partnumber = $request->partnumber;
        $item->categoryId = $request->categoryId;

        $item->save();

        return redirect('/items')->with('success', 'Item added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Item::find($id);
        $categories = Category::all();
        return view('items.edit', ['categories' => $categories, 'item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Item::find($id);
        $item->update($request->all());
        return redirect('items')->with("success", "Item has been Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $storeItem = Item::find($id);
        $storeItem->delete();
        return redirect('items')->with("success", "Item has been deleted");
    }
}
