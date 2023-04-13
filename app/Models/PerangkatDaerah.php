<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerangkatDaerah extends Model
{
    use HasFactory;
    protected $table = 'profil_perangkatdaerah';
    protected $guarded  = ['id'];
}
