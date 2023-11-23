<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrik extends Model
{
    use HasFactory;
    public $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function desa()
    {
        return $this->hasMany(Desa::class,'distrik_id');
    }
}
