<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker =\Faker\Factory::create();
        $categories=['sport','Education','Daily','It','Health'];
        for ($i=0;$i<5;$i++) {
            DB::table('articles')->insert([
                'category_name' => $categories[array_rand($categories)],
                'title' => $faker->sentence(5),
                'image' => 'https://loremflickr.com/800/400/cats?'.rand(),
                'content' => $faker->text,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
