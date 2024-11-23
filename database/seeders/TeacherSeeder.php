<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Teacher::create(['name' => 'John Doe', 'email' => 'john@example.com', 'subject_id' => 1 ]);
        Teacher::create(['name' => 'Jane Smith', 'email' => 'jane@example.com', 'subject_id' => 2 ]);
    }
}