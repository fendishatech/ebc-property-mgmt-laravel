<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category1 = Category::where('name', 'consumable')->first();
        $category2 = Category::where('name', 'returnable')->first();
        $category3 = Category::where('name', 'permanent')->first();

        Item::create(['item_name' => 'ALIGNMENT TAPE RBS-35PPAL', 'partnumber' => '8-960-020-62', 'categoryId' => $category3->id]);
        Item::create(['item_name' => 'CAMERA BATTREY', 'partnumber' => '456412-CAMB', 'categoryId' => $category2->id]);
        Item::create(['item_name' => 'Capacitor', 'partnumber' => 'C/M3.3PF500V-CM', 'categoryId' => $category1->id]);
    }
}
