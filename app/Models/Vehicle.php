<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_name',
        'model',
        'transmission',
        'drive',
        'engine_type',
        'engine_size',
        'fuel',
        'year',
        'color',
        'door',
        'seats',
        'bodytype',
        'mileage',
        'name',
        'email',
        'phone',
        'location',
    ];
}
