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
        Subject::create(['name' => 'Matematika', 'description' => 'Pelajaran Matematika']);
        Subject::create(['name' => 'Bahasa Inggris', 'description' => 'Pelajaran Bahasa Inggris']);
    }
}