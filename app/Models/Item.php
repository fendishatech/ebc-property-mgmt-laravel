<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = ['item_name', 'partnumber', 'categoryId'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function storeItems()
    {
        return $this->hasMany(StoreItem::class);
    }
}
