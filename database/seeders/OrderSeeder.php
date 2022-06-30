<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert($this->getOrders());
    }

    private function getOrders(): array
    {
        $faker = Factory::create();
        $orders = [];
        for ($i = 1; $i <= 23; $i++) {
            $orders[] = [
                'firstname' => $faker->firstName(),
                'lastname' => $faker->lastName(),
                'description' => $faker->sentence(),
                'email' => $faker->email(),
                'phone' => $faker->e164PhoneNumber()
            ];
        }
        return $orders;
    }
}
