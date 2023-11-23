<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    public $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
        'distrik_id'
    ];

    public function distrik()
    {
        return $this->hasOne(Distrik::class,'id','distrik_id');
    }

}
