<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detil extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function akun()
    {
        return $this->belongsTo(akun::class);
    }
}
