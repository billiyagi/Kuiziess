<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\User;
use Faker\Factory;
class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create('id_ID');
        $usersModel = new User();
        helper('text');
        // $userID = ;
        for ( $i = 0; $i <= 10; $i++ )
        {
            $usersModel->insert([
                'access_code'   =>  date('ymd'). random_string('numeric', 4),
                'first_name'    =>  $faker->firstName(),
                'last_name'     =>  $faker->lastName(),
                'email'         =>  $faker->email(),
                'password'      =>  password_hash('12345', PASSWORD_BCRYPT),
                'role'          =>  'teacher'
            ]);
        }
    }
}
