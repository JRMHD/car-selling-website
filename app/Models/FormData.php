<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    protected $table = 'form_data';

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