<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'profil_desa';
    protected $guarded  = ['id'];

    public function distrik()
    {
        return $this->hasOne(Distrik::class,'id');
    }

}
