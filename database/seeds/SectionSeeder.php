<?php

use App\Models\Section;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->delete();
        
        $data = [
            ['section_name' => 'A'],
            ['section_name' => 'B']
        ];
           
        foreach ($data as $value) {
            Section::create($value);
        }
    }
}
