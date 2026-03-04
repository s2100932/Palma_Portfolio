<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            ['role' => 'Officer', 'organization' => 'Computer Science Society (CSS)', 'description' => 'Wanted to try joining an organization', 'year' => '2023'],
            ['role' => 'Officer', 'organization' => 'Computer Science Society (CSS)', 'description' => 'I loved the lively atmosphere and wanted to continue being part of the org', 'year' => '2024'],
            ['role' => 'DCS Head', 'organization' => 'Computer Science Society (CSS)', 'description' => 'Suprised I accepted being the head of a department', 'year' => '2025']
        ]);
    }
}
