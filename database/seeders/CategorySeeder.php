<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getCategories());
    }

    private function getCategories(): array
    {
        $categories = [];
        $faker = Factory::create();
        for ($i = 1; $i < 10; $i++) {
            $categories[] = [
                'title' => $faker->sentence(2),
                'image' => $faker->imageUrl(),
                'description' => $faker->sentence(6)
            ];
        }
        return $categories;
    }
}
