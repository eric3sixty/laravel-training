<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            ['course_code' => 'BSCS', 'course_description' => 'Bachelor of Science in Computer Science'],
            ['course_code' => 'BSIT', 'course_description' => 'Bachelor of Science in Information Technology'],
            ['course_code' => 'BSIS', 'course_description' => 'Bachelor of Science in Information Systems'],
            ['course_code' => 'BSECE', 'course_description' => 'Bachelor of Science in Electronics Engineering'],
            ['course_code' => 'BSEE', 'course_description' => 'Bachelor of Science in Electrical Engineering'],
            ['course_code' => 'BSME', 'course_description' => 'Bachelor of Science in Mechanical Engineering'],
            ['course_code' => 'BSCE', 'course_description' => 'Bachelor of Science in Civil Engineering'],
            ['course_code' => 'BSBA', 'course_description' => 'Bachelor of Science in Business Administration'],
            ['course_code' => 'BSA', 'course_description' => 'Bachelor of Science in Accountancy'],
            ['course_code' => 'BSED', 'course_description' => 'Bachelor of Secondary Education'],
            ['course_code' => 'BEED', 'course_description' => 'Bachelor of Elementary Education'],
            ['course_code' => 'BSPsych', 'course_description' => 'Bachelor of Science in Psychology'],
            ['course_code' => 'BSN', 'course_description' => 'Bachelor of Science in Nursing'],
            ['course_code' => 'BSP', 'course_description' => 'Bachelor of Science in Pharmacy'],
            ['course_code' => 'BSHRM', 'course_description' => 'Bachelor of Science in Hotel and Restaurant Management'],
            ['course_code' => 'BSTM', 'course_description' => 'Bachelor of Science in Tourism Management'],
            ['course_code' => 'BSCrim', 'course_description' => 'Bachelor of Science in Criminology'],
            ['course_code' => 'BSAgri', 'course_description' => 'Bachelor of Science in Agriculture'],
            ['course_code' => 'BSForestry', 'course_description' => 'Bachelor of Science in Forestry'],
            ['course_code' => 'BSArch', 'course_description' => 'Bachelor of Science in Architecture'],
        ]);
    }
}
