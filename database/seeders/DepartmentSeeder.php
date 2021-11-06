<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departments')->insert([
            'dept_id' => '1001',
            'dept_name' => 'Finance',
            'location' => 'Surabaya',
            'description' => 'This department is for employees who specialize in finance.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('departments')->insert([
            'dept_id' => '1002',
            'dept_name' => 'Audit',
            'location' => 'Malang',
            'description' => 'This department is for employees who specialize in audit.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('departments')->insert([
            'dept_id' => '1003',
            'dept_name' => 'Marketing',
            'location' => 'Jakarta',
            'description' => 'This department is for employees who specialize in marketing.',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

    }
}
