<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BukuTahunan extends Model
{
    protected $fillable = [
        'image',
        'name',
        'class',
        'role_number',
        'quotes',
    ];
}
