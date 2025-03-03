<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PackageUser extends Pivot
{
    protected $fillable = [
        'user_id',
        'package_id',
        'from_at',
        'to_at',
        'expired_at',
    ];

    protected function casts(): array
    {
        return [
            'from_at' => 'datetime',
            'to_at' => 'datetime',
            'expired_at' => 'datetime',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
