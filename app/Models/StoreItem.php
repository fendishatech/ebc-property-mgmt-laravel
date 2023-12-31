<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreItem extends Model
{
    use HasFactory;

    protected $table = 'storeItems';

    protected $fillable = [
        'store_name',
        'quantity',
        'location',
        'itemId'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
