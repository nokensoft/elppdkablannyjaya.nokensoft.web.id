<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    public $guarded = [];

    public function distrik()
    {
        return $this->hasOne(Distrik::class,'id','distrik_id');
    }

}
