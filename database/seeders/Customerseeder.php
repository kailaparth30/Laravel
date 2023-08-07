<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class Customerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            $faker = Faker::create();
            $customer = new  Customer;
            $customer->name = $faker->name;
            $customer->email = $faker->email;
            $customer->gender = "male";
            $customer->address = $faker->address;
            $customer->state = $faker->state;
            $customer->Country = $faker->country;
            $customer->dob = $faker->date;
            $customer->password = $faker->password;
            $customer->save();
        }
    }
}
