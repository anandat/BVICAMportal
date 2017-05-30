<?php

use App\Models\FacultySubject;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FacultySubjectSeeder extends Seeder
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
            FacultySubject::create([
                'faculty_id' => $faker->numberBetween(1, 50),
                'subject_id' => $faker->numberBetween(1,65)
           ]);
        }
    }
}