<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->insert($this->getFeedbacks());
    }

    private function getFeedbacks(): array
    {
        $faker = Factory::create();
        $feedbacks = [];
        for ($i = 1; $i <= 23; $i++) {
            $feedbacks[] = [
                'firstname' => $faker->firstName(),
                'lastname' => $faker->lastName(),
                'description' => $faker->sentence()
            ];
        }
        return $feedbacks;
    }
}
