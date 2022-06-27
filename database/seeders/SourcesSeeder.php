<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sources')->insert($this->getSources());
    }

    private function getSources(): array
    {
        $sources = [];
        $faker = Factory::create();
        for ($i = 1; $i < 11; $i++) {
            $sources[] = [
                'name' => $faker->company(),
                'description' => $faker->sentence(5),
                'home_page_url' => $faker->url(),
            ];
        }
        return $sources;
    }
}
