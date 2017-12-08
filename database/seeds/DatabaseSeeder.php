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
                'display_id'        => $faker->numberBetween(0,1000),
                'chair_id'          => $faker->numberBetween(1,30),
                'used'              => $faker->randomElement(['1', '0']),
                'barcode'           => $faker->numberBetween(0,1000),
                'created_at'        => now(),
                'updated_at'        => now()
                
            ]);

            DB::table('tbl_chairs')->insert([
                'chair_id'          => $faker->unique()->numberBetween(0,2002),
                'theather_id'       => $faker->numberBetween(0,4),
                'chairnumber'       => $faker->unique()->numberBetween(0,2002),
                'rownumber'         => $faker->numberBetween(0,30),
                'used'              => $faker->randomElement((['1', '0'])),
                'display_id'        => $faker->numberBetween(1,1000),
                'created_at'        => now(),
                'updated_at'        => now()
            ]);

            DB::table('tbl_displays')->insert([
                'display_id'        => $faker->numberBetween(0,1000),
                'movie_id'          => $faker->numberBetween(0,100),
                'theather_id'       => $faker->numberBetween(0,3),
                'age_id'            => $faker->numberBetween(0,10),
                'timeslot_id'       => $faker->numberBetween(0,1000),
                'date'              => $faker->date(),
                'time'              => $faker->time(),
                'created_at'        => now(),
                'updated_at'        => now()

            ]);
        }
        for($i = 0; $i <=100; $i++)
        {
            DB::table('tbl_order')->insert([
                'order_id'          => $faker->numberBetween(0,100),
                'user_id'           => $faker->numberBetween(0,100),
                'ticket_id'         => $faker->numberBetween(0,100),
                'created_at'        => now(),
                'updated_at'        => now()
            ]);

            DB::table('tbl_movies')->insert([
               'movie_title'        => $faker->sentence,
               'language_version'   => $faker->languageCode,
               'genre'              => $faker->word,
               'projection'         => $faker->word,
               'movie_info'         => $faker->sentence,
               'requirements'       => $faker->sentence,
               'created_at'         => now(),
               'updated_at'         => now()

            ]);


        }
        for($i = 0; $i <= 3; $i++)
        {
            DB::table('tbl_theathers')->insert([
                'theather_id'       =>$faker->numberBetween(0,3),
                'name'              =>$faker->name(),
                'capacity'          =>$faker->numberBetween(0,500),
                'amount_of_chairs_row' =>$faker->numberBetween(4,16),
                'amount_of_loverchairs' =>$faker->numberBetween(0,16),
                'created_at'        => now(),
                'updated_at'        => now()

            ]);

            DB::table('tbl_z_rules')->insert([
               'theather_id'        => $faker->numberBetween(0,3),
               'row_loveseat'       => $faker->numberBetween(0,20),
               'created_at'         => now(),
               'updated_at'         => now()
            ]);
        }
        for ($i = 0; $i <= 10; $i++){
            DB::table('tbl_age_catogories')->insert([
               'age_id'             => $faker->numberBetween(0,10),
               'category'           => $faker->numberBetween(0,10),
               'created_at'         => now(),
               'updated_at'         => now()
            ]);
        }


    }
}
