<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if( env('APP_ENV') == 'development')
        	Admin::create(['email' => 'admin@admin.com', 'name' => 'admin', 'password' => 'password']);
        Admin::create(['email' => 'a@a.com', 'name' => 'admin', 'password' => 'password']);
    }
}
