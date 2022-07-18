<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subkom extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function komponen()
    {
        return $this->belongsTo(komponen::class);
    }

    public function akun()
    {
        return $this->hasMany(akun::class);
    }
}
