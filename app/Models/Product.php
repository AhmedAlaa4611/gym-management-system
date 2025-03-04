<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'status',
        'type',
        'image',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product');
    }
}
