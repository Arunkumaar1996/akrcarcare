<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientCarInfo extends Model
{
    use HasFactory;
    protected $table = 'client_car_info';
    protected $fillable = [
        'service_type_name', 'service_type_price', 'car_number', 'car_name',
    ];

    public function clients()
    {
        return $this->belongsToMany(ClientInfo::class, 'client_service_info');
    }
      public function employees()
    {
        return $this->belongsToMany(Employee::class, 'car_info_employee', 'car_info_id', 'employee_id');
    }
}
