<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesertas extends Model
{
    use HasFactory;

    protected $table = 'pesertas';
    protected $primaryKey = 'idpesertas';
    // protected $date = ['tanggal_lahir'];

    public $incrementing = false;
    public $timestamps = true;
}
