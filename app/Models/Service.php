<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['user_id', 'type', 'day'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function serviceHistories()
    {
        return $this->hasMany(ServiceHistory::class);
    }
}
