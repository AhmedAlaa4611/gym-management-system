<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable = [
        'name',
        'description',
        'start_time',
        'end_time',
        'day',
        'coach_name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
