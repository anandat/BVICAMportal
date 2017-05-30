<?php

use App\Models\Faculty;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i =0; $i < 50; $i++) 
        {
          if( env('APP_ENV') == 'development')
            Faculty::create([
                'email' => $faker->email,
               'name' => $faker->name,
               'password' => 'password',
               'gender' => $faker->title('male'|'female'),
               'qualification' => $faker->text(20) ,
               'designation' => $faker->jobTitle,
               'area_of_expertise' => $faker->text(30) ,
               'address' => $faker->address ,
               'mobile' => $faker->phoneNumber ,
           ]);
        }
    }
}
