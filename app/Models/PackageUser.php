<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PackageUser extends Pivot
{
    use HasFactory;

    protected $table = 'package_user';

    protected $fillable = ['user_id', 'package_id','from_at','to_at','expired_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
