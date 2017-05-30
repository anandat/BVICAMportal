<?php

use App\Models\AttendanceType;
use Illuminate\Database\Seeder;

class AttendanceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendance_types')->delete();
        $data = [
            ['attendance_type' => 'Present'],
            ['attendance_type' => 'Absent'],
            ['attendance_type' => 'DL'],
            ['attendance_type' => 'CL'],
            ['attendance_type' => 'ML']
        ];
           
        foreach ($data as $value) {
            AttendanceType::create($value);
        }
    }
}
