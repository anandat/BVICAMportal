<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('AdminSeeder');
        $this->command->info('Admin table seeded!');

         $this->call('FacultySeeder');
         $this->command->info('Faculty table seeded!');

         $this->call('StudentSeeder');
        $this->command->info('Student table seeded!');

        $this->call('SectionSeeder');
        $this->command->info('Section table seeded!');

        $this->call('SemesterSeeder');
        $this->command->info('Semester table seeded!');

        $this->call('SubjectSeeder');
        $this->command->info('Subject table seeded!');

        $this->call('SubjectTypeSeeder');
        $this->command->info('SubjectType table seeded!');

        $this->call('TimePeriodSeeder');
        $this->command->info('TimePeriod table seeded!');

        $this->call('FacultySeeder');
        $this->command->info('FacultySeeder table seeded!');

        $this->call('FacultySubjectSeeder');
        $this->command->info('FacultySubjectSeeder table seeded!');

        $this->call('StudentSeeder');
        $this->command->info('StudentSeeder table seeded!');

        $this->call('AttendanceTypeSeeder');
        $this->command->info('AttendanceTypeSeeder table seeded!');

        $this->call('AttendanceSeeder');
        $this->command->info('AttendanceSeeder table seeded!');

        $this->call('StudentSubjectSeeder');
        $this->command->info('StudentSubjectSeeder table seeded!');

        Model::reguard();
    }
}