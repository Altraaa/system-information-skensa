<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\Classroom;
use App\Models\Subject;
use App\Models\Teacher;
use App\Models\Room;
use Illuminate\Database\Seeder;
use Number;

class ScheduleSeeder extends Seeder
{
    public function run()
    {
        $schedules = [
            // senin
            [
                'classroom_id' => 3,
                'subject_id' => 1,
                'teacher_id' => 1,
                'room' => '306',
                'day' => 'Monday',
                'start_time' => '07:30:00',
                'end_time' => '10:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 1,
                'teacher_id' => 1,
                'room' => '306',
                'day' => 'Monday',
                'start_time' => '10:30:00',
                'end_time' => '13:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 2,
                'teacher_id' => 2,
                'room' => '306',
                'day' => 'Monday',
                'start_time' => '13:30:00',
                'end_time' => '14:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 3,
                'teacher_id' => 10,
                'room' => '306',
                'day' => 'Monday',
                'start_time' => '14:10:00',
                'end_time' => '15:30:00',
            ],

            // selasa
            [
                'classroom_id' => 3,
                'subject_id' => 4,
                'teacher_id' => 3,
                'room' => '304',
                'day' => 'Tuesday',
                'start_time' => '07:30:00',
                'end_time' => '09:30:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 2,
                'teacher_id' => 2,
                'room' => '304',
                'day' => 'Tuesday',
                'start_time' => '09:30:00',
                'end_time' => '10:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 2,
                'teacher_id' => 2,
                'room' => '304',
                'day' => 'Tuesday',
                'start_time' => '10:30:00',
                'end_time' => '11:50:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 5,
                'teacher_id' => 11,
                'room' => '304',
                'day' => 'Tuesday',
                'start_time' => '11:50:00',
                'end_time' => '13:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 5,
                'teacher_id' => 11,
                'room' => '304',
                'day' => 'Tuesday',
                'start_time' => '13:30:00',
                'end_time' => '15:30:00',
            ],

            // rabu
            [
                'classroom_id' => 3,
                'subject_id' => 6,
                'teacher_id' => 3,
                'room' => '305',
                'day' => 'Wednesday',
                'start_time' => '07:30:00',
                'end_time' => '10:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 7,
                'teacher_id' => 4,
                'room' => '305',
                'day' => 'Wednesday',
                'start_time' => '10:30:00',
                'end_time' => '12:30:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 8,
                'teacher_id' => 5,
                'room' => '305',
                'day' => 'Wednesday',
                'start_time' => '12:30:00',
                'end_time' => '13:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 8,
                'teacher_id' => 5,
                'room' => '305',
                'day' => 'Wednesday',
                'start_time' => '13:30:00',
                'end_time' => '14:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 9,
                'teacher_id' => 6,
                'room' => '305',
                'day' => 'Wednesday',
                'start_time' => '14:10:00',
                'end_time' => '15:30:00',
            ],

            // kamis
            [
                'classroom_id' => 3,
                'subject_id' => 10,
                'teacher_id' => 7,
                'room' => '307',
                'day' => 'Thursday',
                'start_time' => '07:30:00',
                'end_time' => '10:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 10,
                'teacher_id' => 7,
                'room' => '307',
                'day' => 'Thursday',
                'start_time' => '10:30:00',
                'end_time' => '13:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 9,
                'teacher_id' => 6,
                'room' => '307',
                'day' => 'Thursday',
                'start_time' => '13:30:00',
                'end_time' => '14:50:00',
            ],

            // jumat
            [
                'classroom_id' => 3,
                'subject_id' => 12,
                'teacher_id' => 9,
                'room' => 'LAB RPL 3',
                'day' => 'Friday',
                'start_time' => '07:30:00',
                'end_time' => '10:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 12,
                'teacher_id' => 9,
                'room' => 'LAB RPL 3',
                'day' => 'Friday',
                'start_time' => '10:30:00',
                'end_time' => '11:10:00',
            ],
            [
                'classroom_id' => 3,
                'subject_id' => 11,
                'teacher_id' => 8,
                'room' => 'LAB RPL 3',
                'day' => 'Friday',
                'start_time' => '11:10:00',
                'end_time' => '12:30:00',
            ],
        ];

        foreach ($schedules as $schedule) {
            // Buat jadwal
            Schedule::create([
                'classroom_id' => $schedule['classroom_id'],
                'subject_id' => $schedule['subject_id'],
                'room' => $schedule['room'],
                'teacher_id' => $schedule['teacher_id'],
                'day' => $schedule['day'],
                'start_time' => $schedule['start_time'],
                'end_time' => $schedule['end_time'],
            ]);
        }
    }
}