<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            ['title' => 'Laravel_Project', 'tech_stack' => 'Fronend, Backend', 'description' => 'I made this project to show what skills and projects I have made through out college', 'link' => 'https://github.com/s2100932/Palma_Portfolio', 'year' => 2026]
        ]);
    }
}
