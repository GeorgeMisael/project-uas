<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mataKuliah';
    protected $primaryKey = 'idmatakuliah';

    protected $fillable = [
        'mataKuliah',
        'sks'
    ];
}
