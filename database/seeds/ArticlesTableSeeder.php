<?php

use Illuminate\Database\Seeder;
use App\Articles;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Articles::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            Articles::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }

    }
}
