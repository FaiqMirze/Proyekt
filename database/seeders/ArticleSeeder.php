<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker =\Faker\Factory::create();
        $categories=['sport','Education','Daily','It','Health','Culture'];
        for ($i=0;$i<10;$i++) {
            $title = $faker->sentence(5);

            DB::table('articles')->insert([
                'category_name' => $categories[array_rand($categories)],
                'title'=>$title,
                'slug'=> Str::slug($title),
                'image' => 'https://loremflickr.com/800/400/cats?'.rand(),
                'content' => $faker->text,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
