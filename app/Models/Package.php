<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'duration', 'price'];

    public function users()
    {
        return $this->belongsToMany(User::class, 'package_user')
            ->withPivot(['from_at', 'to_at', 'expired_at'])
            ->withTimestamps();
    }
}
