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
        $studentUser = [
            [
                'username' => '30675',
                'nis' => '30675',
                'name' => 'Aldiansah Saputra',
                'classroom_id' => 3,
                'attendance_number' => 1
            ],
            [
                'username' => '30676',
                'nis' => '30676',
                'name' => 'Anak Agung Ngurah Bagus Krisna Pradipta',
                'classroom_id' => 3,
                'attendance_number' => 2
            ],
            [
                'username' => '30677',
                'nis' => '30677',
                'name' => 'Andhika Adhi Irwansyah',
                'classroom_id' => 3,
                'attendance_number' => 3
            ],
            [
                'username' => '30678',
                'nis' => '30678',
                'name' => 'Bagaskara Refananda',
                'classroom_id' => 3,
                'attendance_number' => 4
            ],
            [
                'username' => '30679',
                'nis' => '30679',
                'name' => 'Christyan Mikha Adi Putra',
                'classroom_id' => 3,
                'attendance_number' => 5
            ],
            [
                'username' => '30680',
                'nis' => '30680',
                'name' => 'Dewa Bagus Putu Prabaswara Suardana',
                'classroom_id' => 3,
                'attendance_number' => 6
            ],
            [
                'username' => '30681',
                'nis' => '30681',
                'name' => 'I Gusti Lanang Agung Rama Putra Prawira',
                'classroom_id' => 3,
                'attendance_number' => 7
            ],
            [
                'username' => '30682',
                'nis' => '30682',
                'name' => 'I Gusti Ayu Mas Pratistha Anggraeni',
                'classroom_id' => 3,
                'attendance_number' => 8
            ],
            [
                'username' => '30683',
                'nis' => '30683',
                'name' => 'I Kadek Pindra Dwi Permana',
                'classroom_id' => 3,
                'attendance_number' => 9
            ],
            [
                'username' => '30684',
                'nis' => '30684',
                'name' => 'I Kadek Satrya Mahesastika',
                'classroom_id' => 3,
                'attendance_number' => 10
            ],
        ];

        foreach ($studentUser as $student) {
            $studentUser = User::create([
                'username' => $student['username'],
                'password' => Hash::make('password123'),
                'role' => 'student',
            ]);

            Student::create([
                'user_id' => $studentUser->id,
                'nis' => $student['nis'],
                'name' => $student['name'],
                'classroom_id' => $student['classroom_id'],
                'attendance_number' => $student['attendance_number'],
            ]);
        }

        // Data guru
        $teacherUser = User::create([
            'username' => '654321', // NIP guru
            'password' => Hash::make('password123'),
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