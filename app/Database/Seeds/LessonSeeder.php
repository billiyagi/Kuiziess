<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    public function run()
    {
        helper('text');
        $lessonsModel = new Lesson();

        $lessonsModel->insert([
            'id'    =>  random_string('numeric', 5),
            'name'  =>  'Bahasa Indonesia',
            'user_id'   =>  1
        ]);
    }
}
