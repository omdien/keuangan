<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kro extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function kegiatan()
    {
        return $this->belongsTo(kegiatan::class);
    }

    public function ro()
    {
        return $this->hasMany(ro::class);
    }
}
