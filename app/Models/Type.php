<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    // nome della tabella
    protected $table = 'types';

    // utilizzo di fillable per assegnare le colonne
    protected $fillable = [
        'name',
        'description',
    ];
}
