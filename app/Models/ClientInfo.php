<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientInfo extends Model
{
    use HasFactory;

    protected $table = 'client_info';
    protected $fillable = [
        'client_name',
        'client_email',
        'client_phone',
        'door_no',
        'address1',
        'city',
        'state',
        'pin_code',
    ];

    public function services()
    {
        return $this->belongsToMany(ClientCarInfo::class, 'client_service_info');
    }
    public function cars()
    {
        return $this->belongsToMany(ClientCarInfo::class, 'client_service_info');
    }
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'car_info_employee', 'car_info_id', 'employee_id');
    }
}
