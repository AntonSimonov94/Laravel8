<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class SourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sources')->insert($this->getData());
    }

    public function getData():array
    {
        $data = [];
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'title' => $faker->sentence(5),
                'author' => $faker->userName(),
                'country' => $faker->country(),
                'year' => $faker->year()
            ];
        }
        return $data;
    }
}


