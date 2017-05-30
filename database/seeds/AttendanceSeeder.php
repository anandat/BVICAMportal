<?php

use App\Models\Attendance;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class AttendanceSeeder extends Seeder
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
          	Attendance::create([
                'student_id' => $faker->numberBetween(1, 30),
               'subject_id' => $faker->numberBetween(1, 65),
               'date_of_lecture' => $faker->dateTimeThisYear($max = 'now'),
               'attendance_type_id' => $faker->randomElement([1, 2, 3, 4, 5]),
               'time_period_id' => $faker->numberBetween(1,6)
           ]);
        }
    }
}