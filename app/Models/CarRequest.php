<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_make',
        'car_model',
        'max_price',
        'min_year',
        'user_name',
        'user_phone',
    ];
}
