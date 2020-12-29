<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Faker::create();
        $users = [];
        for($index=0;$index<3;$index++){
            $users[] = [
                'name' => $faker->name,
                'email' => "user" . ($index+1) ."@gmail.com",
                'password' => bcrypt('user1234'),
                'role_id' => 1,
                'phonenumber' => $faker->e164PhoneNumber,
                'dateofbirth' => $faker->date($format = 'Y-m-d', $max = 'now'),

            ];

        }
        // dd($users);
        DB::table('users')->insert($users);
    }
}
