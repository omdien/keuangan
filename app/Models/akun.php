<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class akun extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function subkom()
    {
        return $this->belongsTo(subkom::class);
    }

    public function detil()
    {
        return $this->hasMany(detil::class);
    }
}
