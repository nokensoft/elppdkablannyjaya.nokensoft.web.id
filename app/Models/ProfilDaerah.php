<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDaerah extends Model
{
    use HasFactory;
    protected $table = 'profildaerah';
    protected $guarded  = ['id'];
}
