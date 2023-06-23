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
        $items = Item::all();
        $storeNames = ['ict', 'transmitter', 'technical'];
        $storeItem = StoreItem::find($id);

        $locationArray = explode(',', $storeItem->location);
        $shelf = substr($locationArray[0], strpos($locationArray[0], '-') + 1);
        $box = substr($locationArray[1], strpos($locationArray[1], '-') + 1);
        $row = substr($locationArray[2], strpos($locationArray[2], '-') + 1);
        $cell = substr($locationArray[3], strpos($locationArray[3], '-') + 1);
        $location = [
            'row' => $row,
            'shelf' => $shelf,
            'box' => $box,
            'cell' => $cell
        ];

        return view('store.edit', ['storeItem' => $storeItem, 'items' => $items, 'storeNames' => $storeNames, 'location' => $location]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $storeItem = StoreItem::find($id);
        $storeItem->update($request->all());
        return redirect('items_store')->with("success", "Item has been Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $storeItem = StoreItem::find($id);
        $storeItem->delete();
        return redirect('items_store')->with("success", "Item has been deleted");
    }
}
