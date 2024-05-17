<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'model',
        'transmission',
        'drive',
        'engine_type',
        'engine_size',
        'fuel',
        'year',
        'chessis',
        'color',
        'doors',
        'seats',
        'price',
        'body_type',
        'mileage',
        'status',
        'condition',
        'image',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'image' => 'array',
    ];
}
