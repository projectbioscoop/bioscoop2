<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Faker\Factory::create();
        for($i = 0; $i <= 1000; $i++)
        {
            DB::table('tbl_tickets')->insert([
                'order_id'          => $faker->numberBetween(0,1000),
                'vertoning_id'      => $faker->numberBetween(0,1000),
                'stoel_id'          => $faker->numberBetween(1,30),
                'gebruikt'          => $faker->randomElement(['1', '0'])
            ]);
            DB::table('order')->insert([

            ]);
        }
    }
}
