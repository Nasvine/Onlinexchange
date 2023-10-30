<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monnaire extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_of_monnaie',
        'symbol_of_monnaie',
        'type_of_monnaie',
        'stock_disponible',
    ];
}
