<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            ['name' => 'ACCOUNTING, BANKING, FINANCE'],
            ['name' => 'ARCHITECTURE & BUILT ENVIRONMENT'],
            ['name' => 'ALLIED HEALTH & SCIENCES'],
            ['name' => 'ART, DESIGN, MULTIMEDIA'],
            ['name' => 'BUSINESS, MANAGEMENT, MARKETING'],
            ['name' => 'COMPUTER SCIENCE & IT'],
            ['name' => 'EDUCATION, PSYCHOLOGY'],
            ['name' => 'ENGINEERING'],
            ['name' => 'HOSPITALITY, TOURISM & EVENTS'],
            ['name' => 'JOURNALISM, MEDIA & COMMUNICATION'],
            ['name' => 'LAW'],
            ['name' => 'MEDICINE'],
            ['name' => 'PHARMACY'],
        ];

        DB::table('departments')->insert($departments);
    }
}
