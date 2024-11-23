<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Subject::create(['name' => 'Matematika', 'teacher_id' => 1]);
        Subject::create(['name' => 'Bahasa Inggris', 'teacher_id' => 2]);
    }
}
