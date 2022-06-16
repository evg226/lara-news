<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getCategories(): array
    {
        $categories = [];
        $faker = Factory::create();
        for ($i = 1; $i < 6; $i++) {
            $categories[] = [
                'id' => $i,
                'title' => $faker->sentence(2),
                'image' => $faker->imageUrl(),
                'description' => $faker->sentence(6)
            ];
        }
        return $categories;
    }

    public function getNews(int $categoryId = null): array
    {
        $news = [];
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $news[] = [
                'id' => $i + 1,
                'title' => $faker->jobTitle(),
                'author' => $faker->name(),
                'image' => $faker->imageUrl(),
                'description' => $faker->sentence(10),
                'created_at' => now('Europe/Moscow'),
                'categoryId' => $categoryId?$categoryId:$faker->randomNumber()
            ];
        }
        return $news;
    }

    public function getNewsById(int $id): array
    {
        $faker = Factory::create();
        return [
            'id' => $id,
            'title' => $faker->jobTitle(),
            'author' => $faker->name(),
            'image' => $faker->imageUrl(),
            'description' => $faker->sentences(150,true),
            'created_at' => now('Europe/Moscow'),
            'categoryId'=>$faker->numberBetween(1,30)
        ];
    }


}
