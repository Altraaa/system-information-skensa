<?php

namespace Database\Seeders;

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
        Teacher::create(['name' => 'John Doe', 'email' => 'john@example.com']);
        Teacher::create(['name' => 'Jane Smith', 'email' => 'jane@example.com']);
    }
}
