<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satker extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function program()
    {
        return $this->hasMany(program::class);
    }
}
