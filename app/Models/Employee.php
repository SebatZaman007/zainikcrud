<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'title',
        'employee_id',
        'joining_date',
        'dob',
        'blood_group',
        'description'
    ];
}
