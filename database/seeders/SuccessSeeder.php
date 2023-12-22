<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuccessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('success')->insert([
            [
                'subjectName'=>'Discrete Math',
                'points'=>'90',
                'assessment_date'=>'2022-09-01',
                'student_id'=>1,
            ],
            [
                'subjectName'=>'Programming',
                'points'=>'93',
                'assessment_date'=>'2022-10-03',
                'student_id'=>1,
            ],
            [
                'subjectName'=>'Discrete Math',
                'points'=>'99',
                'assessment_date'=>'2023-11-21',
                'student_id'=>2,
            ],
            [
                'subjectName'=>'Web',
                'points'=>'99',
                'assessment_date'=>'2023-09-22',
                'student_id'=>2,
            ],
            [
                'subjectName'=>'Web',
                'points'=>'84',
                'assessment_date'=>'2021-11-22',
                'student_id'=>3,
            ],
            [
                'subjectName'=>'PHP',
                'points'=>'89',
                'assessment_date'=>'2022-12-22',
                'student_id'=>3,
            ],
            [
                'subjectName'=>'VueJS',
                'points'=>'90',
                'assessment_date'=>'2023-05-12',
                'student_id'=>3,
            ],
    ]);
    }
}
