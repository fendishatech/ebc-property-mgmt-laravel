<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\StoreItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item1 = Item::where('id', 1)->first();
        $item2 = Item::where('id', 2)->first();
        $item3 = Item::where('id', 3)->first();

        StoreItem::create([
            'store_name' => 'ict',
            'quantity' => 10,
            'location' => "shelf-7,box-1,row-1,cell-1",
            'itemId' => $item1->id
        ]);

        StoreItem::create([
            'store_name' => 'transmitter',
            'quantity' => 8,
            'location' => "shelf-6,box-5,row-6,cell-10",
            'itemId' => $item2->id
        ]);

        StoreItem::create([
            'store_name' => 'technical',
            'quantity' => 16,
            'location' => "shelf-1,box-1,row-2,cell-12",
            'itemId' => $item3->id
        ]);
    }
}
