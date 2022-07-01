<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';
    protected $fillable = ['nama','kategori'];
    use HasFactory;

    public function jadwal(){

       return $this->hasMany(Jadwal::class,'id_dokter');
    }
}
