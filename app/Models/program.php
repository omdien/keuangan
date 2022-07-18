<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function satker()
    {
        return $this->belongsTo(satker::class);
    }

    public function kegiatan()
    {
        return $this->hasMany(kegiatan::class);
    }
}
