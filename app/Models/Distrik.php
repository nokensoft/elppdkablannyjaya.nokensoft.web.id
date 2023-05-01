<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrik extends Model
{
    use HasFactory;
    protected $table = 'profil_distrik';
    public $guarded  = [];

    public function desa()
    {
        return $this->hasMany(Desa::class,'distrik_id');
    }

    protected $fillable = [
        'nama_distrik', 
        'ibu_kota_distrik', 
        'nama_kepala_distrik', 
        'alamat', 
        'telp', 
        'email', 
        'foto_kepala_distrik',
        'foto_kantor',
        'slug',
    ];
}
