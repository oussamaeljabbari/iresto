<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	'full_name'=>$this->faker->name(),
                'number'=>$this->faker->phoneNumber(),
                        'username'=>$this->faker->userName(),
                'email'=>$this->faker->email(),
                'password'=> Hash::make('password')

    }

}
