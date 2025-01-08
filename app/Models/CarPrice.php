<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarPrice extends Model
{
    use HasFactory;
    protected $table = 'car_prices';

    // Specify which columns can be mass-assigned
    protected $fillable = ['car_type', 'price'];
}

