<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Transaksi extends Model
{
    protected $collection = 'transaksi';
    protected  $connection = 'mongodb';
    
    use HasFactory;
}
