<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'sku',
        'price',
        'supplier_id',
        'quantity',
        'reorder_level',
    ];

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }
}
