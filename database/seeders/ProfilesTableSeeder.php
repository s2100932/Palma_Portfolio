<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([    
        ['first_name' => 'Jopher Evann', 'last_name' => 'Palma', 'title' => 'Student', 'bio' => 'Living my best and last few years in college', 'contact' => '09202830562', 'email' => 'jopherevannpalma@gmail.com', 'location' => 'Bacolod City']
        ]);
    }
}
