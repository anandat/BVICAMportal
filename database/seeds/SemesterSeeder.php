<?php

use App\Models\Semester;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->delete();
        
        $data = [
            ['semester' => '1'],
            ['semester' => '2'],
            ['semester' => '3'],
            ['semester' => '4'],
            ['semester' => '5'],
            ['semester' => '6']
        ];
           
        foreach ($data as $value) {
            Semester::create($value);
        }
    }
}
