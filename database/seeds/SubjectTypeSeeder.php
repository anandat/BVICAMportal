<?php

use App\Models\SubjectType;
use Illuminate\Database\Seeder;

class SubjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subject_types')->delete();
        
        $data = [
            ['subject_type_name' => 'Theory'],
            ['subject_type_name' => 'Elective-I'],
            ['subject_type_name' => 'Elective-II'],
            ['subject_type_name' => 'Practical'],
            ['subject_type_name' => 'NUES']
        ];
           
        foreach ($data as $value) {
            SubjectType::create($value);
        }
    }
}
