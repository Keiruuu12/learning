<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Course;
use App\Models\MyCourse;
use App\Models\PracticeForm;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\multiselect;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'iskandar',
            'email' => 'iskandar@gmail.com',
            'id_number' => '2109010055',
            'address' => 'Iskandar Muda',
            'password' => bcrypt('password'),
            'major' => 'sistem informasi',
            'remember_token' => "1234",
            'faculty' => 'FIKTI',
        ]);

        User::factory()->create([
            'name' => 'Dapp',
            'email' => 'iskanda@gmail.com',
            'id_number' => '210901055',
            'address' => 'Iskandar Muda',
            'password' => bcrypt('12345'),
            'major' => 'sistem informasi',
            'remember_token' => "1234",
            'faculty' => 'FIKTI',
        ]);

        Course::create([
            'course' => 'math',
            'lecture' => 'ridwan',
            'enroll' => '12345',
            'major' => 'sistem informasi'
        ]);

        Course::create([
            'course' => 'blockchain',
            'lecture' => 'bawang',
            'enroll' => '12345',
            'major' => 'sosiologi'
        ]);

        Course::create([
            'course' => 'web programming',
            'lecture' => 'Jahe',
            'enroll' => '12345',
            'major' => 'psikologi'
        ]);

        MyCourse::create([
            'course_id' => 1,
            'user_id' => 1
        ]);

        MyCourse::create([
            'course_id' => 2,
            'user_id' => 1
        ]);

        MyCourse::create([
            'course_id' => 3,
            'user_id' => 2
        ]);

        PracticeForm::create([
            'course_id' => 1,
            'user_id' => 1,
            'type' => 'Practice',
            'learning' => 1,
            'task_content' => 'Menjawab soal nomor 1 - 10 pada halaman 49 (user id 1)'
        ]);

        PracticeForm::create([
            'course_id' => 1,
            'user_id' => 1,
            'type' => 'Practice',
            'learning' => 2,
            'task_content' => 'Menjawab soal latihan berikut ini (user id 1)'
        ]);

        PracticeForm::create([
            'course_id' => 1,
            'user_id' => 2,
            'type' => 'Practice',
            'learning' => 2,
            'task_content' => 'Menjawab soal latihan berikut ini (user id 2)'
        ]);

        PracticeForm::create([
            'course_id' => 2,
            'user_id' => 2,
            'type' => 'Practice',
            'learning' => 1,
            'task_content' => 'Menjawab soal latihan halaman 3 A - B'
        ]);

        PracticeForm::create([
            'course_id' => 3,
            'user_id' => 2,
            'type' => 'Modul',
            'learning' => 1,
            'task_content' => 'Silahkan baca dan pahami modul berikut ini'
        ]);
    }
}
