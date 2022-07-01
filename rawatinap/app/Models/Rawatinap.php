<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rawatinap extends Model
{
    protected $table = 'rawatinap';
    protected $fillable = ['id_passien','lama_dirawat','diagnosa','jenis_kamar'];

    use HasFactory;
}
