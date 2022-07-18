<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function program()
    {
        return $this->belongsTo(program::class);
    }

    public function kro()
    {
        return $this->hasMany(kro::class);
    }
}
