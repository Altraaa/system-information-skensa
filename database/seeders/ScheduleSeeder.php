<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\Classroom;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Room;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    public function run()
    {
        // Ambil data dari tabel yang sudah ada
        $classrooms = Classroom::all();
        $subjects = Subject::all();
        $teachers = Teacher::all();

        // Hari-hari yang tersedia
        $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'];

        // Loop untuk setiap kelas
        foreach ($classrooms as $classroom) {
            // Setiap kelas memiliki jadwal untuk setiap hari
            foreach ($days as $day) {
                // Ambil secara acak subject, teacher, dan room
                $subject = $subjects->random();
                $teacher = $teachers->random();

                // Waktu mulai dan selesai (acak dalam rentang waktu tertentu)
                $timeStart = now()->setTime(rand(7, 12), 0); // Rentang waktu antara jam 7:00 - 11:00
                $timeEnd = $timeStart->copy()->addHours(2);  // Tambah durasi 2 jam

                // Buat jadwal
                Schedule::create([
                    'classroom_id' => $classroom->id,
                    'subject_id' => $subject->id,
                    'teacher_id' => $teacher->id,
                    'day' => $day,
                    'start_time' => $timeStart->format('H:i'),
                    'end_time' => $timeEnd->format('H:i'),
                ]);
            }
        }
    }
}