<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
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
        'password',
    ];
}
