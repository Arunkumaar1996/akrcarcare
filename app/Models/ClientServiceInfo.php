<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientServiceInfo extends Model
{
    use HasFactory;
    protected $table = 'client_service_info';
    protected $fillable = [
        'client_info_id', 'client_car_info_id',
    ];
}
