<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    public $table = 'pasien';
    protected $fillable = ['nama','alamat','jenis_kelamin','usia','kontak'];
    use HasFactory;

    public function pendaftaran(){

        return $this->hasMany(Pendaftaran::class, 'id_pasien');
    }
}
