<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marque_telephone extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nom',
    ];
}