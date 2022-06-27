<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getNews());
    }

    public function getNews(): array
    {
        $news = [];
        $faker = Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $title=$faker->jobTitle();
            $news[] = [
                'title' =>$title,
                'slug'=>\str()->slug($title),
                'author' => $faker->name(),
                'image' => $faker->imageUrl(),
                'description' => $faker->sentence(5),
                'content'=>$faker->sentences(50,true),
                'category_id' =>$faker->randomDigitNotZero(),
                'published_at'=>$faker->date()
            ];
        }
        return $news;
    }

}
