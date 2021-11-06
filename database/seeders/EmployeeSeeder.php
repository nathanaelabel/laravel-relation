<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('employees')->insert([
            'emp_id' => '58761',
            'emp_name' => 'Gideon',
            'job_position' => 'Manager',
            'gender' => 'Male',
            'hire_date' => Carbon::create('2020', '11', '03'),
            'dept_name' => '1001',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('employees')->insert([
            'emp_id' => '58762',
            'emp_name' => 'Franklyn',
            'job_position' => 'Manager',
            'gender' => 'Male',
            'hire_date' => Carbon::create('2020', '12', '06'),
            'dept_name' => '1002',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('employees')->insert([
            'emp_id' => '58763',
            'emp_name' => 'Trevor',
            'job_position' => 'Manager',
            'gender' => 'Male',
            'hire_date' => Carbon::create('2021', '02', '01'),
            'dept_name' => '1003',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('employees')->insert([
            'emp_id' => '58764',
            'emp_name' => 'Amanda',
            'job_position' => 'Clerk',
            'gender' => 'Female',
            'hire_date' => Carbon::create('2020', '12', '10'),
            'dept_name' => '1002',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('employees')->insert([
            'emp_id' => '58765',
            'emp_name' => 'Jonas',
            'job_position' => 'Salesman',
            'gender' => 'Male',
            'hire_date' => Carbon::create('2021', '04', '03'),
            'dept_name' => '1003',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('employees')->insert([
            'emp_id' => '58766',
            'emp_name' => 'Claire',
            'job_position' => 'Accountant',
            'gender' => 'Female',
            'hire_date' => Carbon::create('2020', '12', '09'),
            'dept_name' => '1001',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
    }
}
