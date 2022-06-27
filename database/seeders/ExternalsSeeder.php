<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExternalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('externals')->insert($this->getExternals());
    }

    private function getExternals():array
    {
        $externals = [];
        $faker = Factory::create();
        for ($i = 1; $i < 101; $i++) {
            $externals[] = [
                'source_id'=>$faker->randomDigitNotZero(),
                'author'=>$faker->name(),
                'title'=>$faker->name(),
                'description'=>$faker->sentence(10),
                'url'=>$faker->url(),
                'image'=>$faker->imageUrl(),
                'published_at'=>$faker->date(),
                'content'=>$faker->sentences(10,true)
            ];
        }
        return $externals;
    }
}
