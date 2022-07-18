<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komponen extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function ro()
    {
        return $this->belongsTo(ro::class);
    }

    public function subkom()
    {
        return $this->hasMany(subkom::class);
    }
}
