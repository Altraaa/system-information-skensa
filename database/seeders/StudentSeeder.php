<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $classroom1 = Classroom::where('name', 'XII RPL 1')->first();
        $classroom2 = Classroom::where('name', 'XII RPL 2')->first();
        $classroom3 = Classroom::where('name', 'XII RPL 3')->first();

        Student::create([
            'name' => 'John Doe',
            'classroom_id' => $classroom1->id,
            'absen' => 1,
            'nis' => 'NIS12345',
        ]);

        Student::create([
            'name' => 'Jane Doe',
            'classroom_id' => $classroom2->id,
            'absen' => 2,
            'nis' => 'NIS12346',
        ]);

        Student::create([
            'name' => 'Sam Smith',
            'classroom_id' => $classroom3->id,
            'absen' => 3,
            'nis' => 'NIS12347',
        ]);
    }
}