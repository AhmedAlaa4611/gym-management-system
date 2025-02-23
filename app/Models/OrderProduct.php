<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';

    protected $fillable = [
        'product_id',
        'order_id',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_product');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'order_product');
    }
}
