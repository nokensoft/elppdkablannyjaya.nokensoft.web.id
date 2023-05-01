<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrik extends Model
{
    use HasFactory;
    public $guarded = [];



    public function desa()
    {
        return $this->hasMany(Desa::class,'distrik_id');
    }
}
