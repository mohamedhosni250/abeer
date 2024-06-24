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
        DB::table('degrees')->insert([
            ['id' => 1, 'name' => 'Certificate'],
            ['id' => 2, 'name' => 'Foundation'],
            ['id' => 3, 'name' => 'English courses'],
            ['id' => 4, 'name' => 'International Schools'],
            ['id' => 5, 'name' => 'Bachelor'],
            ['id' => 6, 'name' => 'Diploma'],
            ['id' => 7, 'name' => 'Masters'],
            ['id' => 8, 'name' => 'Phd'],
        ]);
    }
}
