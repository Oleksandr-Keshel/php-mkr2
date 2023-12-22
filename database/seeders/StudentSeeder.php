<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('students')->insert([
            [
                'fullName' => "Ivanov Ivan Ivanovich",
                'course' => 2,
                'speciality' => "System Analysis",
            ],
            [
                'fullName' => "Petrov Petro Petrovich",
                'course' => 1,
                'speciality' => "Applied Math",
            ],
            [
                'fullName' => "Zubko Evgen Evgenovich",
                'course' => 3,
                'speciality' => "System Analysis",
            ]
        ]);
    }
}
