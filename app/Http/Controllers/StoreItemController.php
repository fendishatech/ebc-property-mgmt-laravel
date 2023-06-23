<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\StoreItem;
use Illuminate\Http\Request;

class StoreItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $storeItems =
            StoreItem::join('items', 'storeItems.itemId', '=', 'items.id')
            ->select('storeItems.*', 'items.item_name')
            ->get();

        return view('store.index', ['storeItems' => $storeItems]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Item::all();
        $storeNames = ['ict', 'transmitter', 'technical'];
        return view('store.new', ['items' => $items, 'storeNames' => $storeNames,]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'shelf' => 'required|numeric|min:1',
            'box' => 'required|numeric|min:1',
            'row' => 'required|numeric|min:1',
            'cell' => 'required|numeric|min:1',
        ]);

        $location = 'shelf-' . $validatedData['shelf'] . ',box-' . $validatedData['box'] . ',row-' . $validatedData['row'] . ',cell-' . $validatedData['cell'];

        $storeItem = new StoreItem();
        $storeItem->location = $location;
        $storeItem->quantity = $request->quantity;
        $storeItem->store_name = $request->store_name;
        $storeItem->itemId = $request->itemId;
        $storeItem->save();

        return redirect('/items_store')->with('success', 'Item added successfully.');
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
        $storeItem = StoreItem::find($id);
        return view('store.edit', ['storeItem' => $storeItem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
