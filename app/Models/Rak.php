<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rak extends Model
{
    protected $table = 'rak';

    protected $fillable = [
        'id_rak',
        'lokasi',
    ];

    protected $primaryKey = 'id_rak';
}
