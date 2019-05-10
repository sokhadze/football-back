<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker =  \Faker\Factory::create();

        $password = Hash::make('leri123');

        User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => $password,
        ]);

        for( $i = 0; $i < 10; $i++ ) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password,
            ]);
        }
    }
}
