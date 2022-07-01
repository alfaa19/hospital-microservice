<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    public $table = 'pendaftaran';
    public  $primaryKey = 'id_pendaftaran';
    protected $fillable = ['layanan','id_pasien'];
    use HasFactory;

    public function pasien(){

        return $this->belongsTo(Pasien::class, 'id_pasien');
    }
}
