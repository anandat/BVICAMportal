<?php

use Illuminate\Database\Seeder;
use App\Models\TimePeriod;

class TimePeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('time_periods')->delete();

        $data = [
        	['from' => '9:00', 'to' => '10:00'],
        	['from' => '10:00', 'to' => '11:00'],
        	['from' => '11:15', 'to' => '12:15'],
        	['from' => '12:15', 'to' => '13:15'],
        	['from' => '14:00', 'to' => '15:00'],
        	['from' => '15:00', 'to' => '16:00']
        ];

        foreach ($data as $value) {
            TimePeriod::create($value);
        }
    }
}
