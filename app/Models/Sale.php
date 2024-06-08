<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'customer_id',
        'quantity',
        'unit_price',
        'total_price',
        'sale_date',
    ];

    public function customer() {
        return $this->belongsTo(Customer::class);
    }
}
