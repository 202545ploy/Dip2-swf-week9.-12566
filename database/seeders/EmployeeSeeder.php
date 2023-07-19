<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::factory()->count(100)->create();
        // DB::table('employees')->insert([
        //     'name' => Str::random(5),
        //     'email' => Str::random(5).'@gmail.com',
        //     'phone' => Str::random(10),
        //     'designation' => Str::random(5),
        // ]);
    }
}
