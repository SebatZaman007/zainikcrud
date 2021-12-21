<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
        'name'=>'Azmain',
        'title' =>'Frontend-Disigner',
        'employee_id' =>'ZL-003',
        'joining_date' =>'01-09-2020',
        'dob'=>'28-09-2005',
        'blood_group' =>'B+',
        'description' =>'good'
       ]);
    }
}
