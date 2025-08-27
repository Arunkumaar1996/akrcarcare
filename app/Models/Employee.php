<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Employee extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
        'name',
        'email',
        'contact_no',
        'address',
        'aadhar_card_no',
        'is_active',
        'salary',
        'unique_id',
        'joining_date',
        'date_of_birth',
        'password'
    ];
    protected $hidden = ['password', 'remember_token'];

public function cars()
{
    return $this->belongsToMany(ClientCarInfo::class, 'car_info_employee', 'employee_id', 'car_info_id');
}

}
