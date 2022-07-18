<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ro extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kro()
    {
        return $this->belongsTo(kro::class);
    }

    public function komponen()
    {
        return $this->hasMany(komponen::class);
    }
}
