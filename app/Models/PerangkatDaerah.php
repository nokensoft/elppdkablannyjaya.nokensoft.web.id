<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatDaerah extends Model
{
    use HasFactory;
    public $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
