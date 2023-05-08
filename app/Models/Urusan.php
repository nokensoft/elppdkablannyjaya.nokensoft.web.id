<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urusan extends Model
{
    use HasFactory;
    public $guarded = [];

    public function ikk()
    {
        return $this->hasMany(Ikk::class,'urusan_id','id');
    }

}
