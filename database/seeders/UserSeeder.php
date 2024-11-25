<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Data siswa
        $studentUser = User::create([
            'username' => '123456', // NIS siswa
            'password' => Hash::make('studentpassword'),
            'role' => 'student',
        ]);

        Student::create([
            'user_id' => $studentUser->id,
            'name' => 'John Doe',
            'nis' => '123456',
            'classroom_id' => 1,
        ]);

        // Data guru
        $teacherUser = User::create([
            'username' => '654321', // NIP guru
            'password' => Hash::make('teacherpassword'),
            'role' => 'teacher',
        ]);

        Teacher::create([
            'user_id' => $teacherUser->id,
            'name' => 'Jane Smith',
            'subject_id' => 1,
            'nip' => '654321',
        ]);
    }
}