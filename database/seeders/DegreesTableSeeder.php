<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegreesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $degrees = [
            ['name' => 'Bachelor'],
            ['name' => 'Doctorate'],
            ['name' => 'Foundation Year'],
            ['name' => 'Language Course'],
            ['name' => 'Master'],
        ];

        DB::table('degrees')->insert($degrees);
    }
}
