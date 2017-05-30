<?php

use App\Models\StudentSubject;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentSubjectSeeder extends Seeder
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
            StudentSubject::create([
                'student_id' => $faker->numberBetween(1, 30),
                'subject_id' => $faker->numberBetween(1,65)
           ]);
        }
    }
}