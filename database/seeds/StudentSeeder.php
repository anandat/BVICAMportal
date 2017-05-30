<?php

use App\Models\Student;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i =0; $i < 200; $i++) 
        {
          if( env('APP_ENV') == 'development')
            Student::create([
                'email' => $faker->email,
               'name' => $faker->name,
               'password' => 'password',
               'gender' => $faker->title('male'|'female'),
               'enrollment_number' => $faker->unique()->numberBetween(101,500) ,
               'roll_number' => $faker->numberBetween(1,60),
               'DOB' => $faker->date,
               'phone' => $faker->phoneNumber, 
               'address' => $faker->address ,
               'parent_phone' => $faker->phoneNumber ,
               'section' => $faker->numberBetween(1,2),
               'semester' => $faker->numberBetween(1,6),
               'batch' => $faker->year()
           ]);
        }
    }
}