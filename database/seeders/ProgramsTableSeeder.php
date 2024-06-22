<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = [
            [
                'name' => 'Bachelor of Business Administration',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'A comprehensive program covering all aspects of business administration.',
                'duration' => 4,
                'intake' => 'September',
                'fee_per_year' => 50000,
                'scholarship_percentage' => 20,
                'university_id' => 1,
                'degree_id' => 1,
                'department_id' => 1,
            ],
            [
                'name' => 'Master of Computer Science',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'Advanced program in computer science and technology.',
                'duration' => 2,
                'intake' => 'January',
                'fee_per_year' => 60000,
                'scholarship_percentage' => 25,
                'university_id' => 2,
                'degree_id' => 2,
                'department_id' => 2,
            ],
            [
                'name' => 'Bachelor of Information Technology',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'Comprehensive study in IT.',
                'duration' => 4,
                'intake' => 'September',
                'fee_per_year' => 49000,
                'scholarship_percentage' => 22,
                'university_id' => 2,
                'degree_id' => 1,
                'department_id' => 3,
            ],
            [
                'name' => 'Master of Engineering',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'Advanced program in engineering.',
                'duration' => 2,
                'intake' => 'January',
                'fee_per_year' => 58000,
                'scholarship_percentage' => 25,
                'university_id' => 3,
                'degree_id' => 2,
                'department_id' => 1,
            ],
            [
                'name' => 'Bachelor of Business Administration',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'A comprehensive program covering all aspects of business administration.',
                'duration' => 4,
                'intake' => 'September',
                'fee_per_year' => 50000,
                'scholarship_percentage' => 20,
                'university_id' => 1,
                'degree_id' => 1,
                'department_id' => 1,
            ],
            [
                'name' => 'Master of Computer Science',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'Advanced program in computer science and technology.',
                'duration' => 2,
                'intake' => 'January',
                'fee_per_year' => 60000,
                'scholarship_percentage' => 25,
                'university_id' => 2,
                'degree_id' => 2,
                'department_id' => 2,
            ],
            [
                'name' => 'Bachelor of Information Technology',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'Comprehensive study in IT.',
                'duration' => 4,
                'intake' => 'September',
                'fee_per_year' => 49000,
                'scholarship_percentage' => 22,
                'university_id' => 2,
                'degree_id' => 1,
                'department_id' => 3,
            ],
            [
                'name' => 'Master of Engineering',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'Advanced program in engineering.',
                'duration' => 2,
                'intake' => 'January',
                'fee_per_year' => 58000,
                'scholarship_percentage' => 25,
                'university_id' => 3,
                'degree_id' => 2,
                'department_id' => 1,
            ],
            [
                'name' => 'Bachelor of Business Administration',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'A comprehensive program covering all aspects of business administration.',
                'duration' => 4,
                'intake' => 'September',
                'fee_per_year' => 50000,
                'scholarship_percentage' => 20,
                'university_id' => 1,
                'degree_id' => 1,
                'department_id' => 1,
            ],
            [
                'name' => 'Master of Computer Science',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'Advanced program in computer science and technology.',
                'duration' => 2,
                'intake' => 'January',
                'fee_per_year' => 60000,
                'scholarship_percentage' => 25,
                'university_id' => 2,
                'degree_id' => 2,
                'department_id' => 2,
            ],
            [
                'name' => 'Bachelor of Information Technology',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'Comprehensive study in IT.',
                'duration' => 4,
                'intake' => 'September',
                'fee_per_year' => 49000,
                'scholarship_percentage' => 22,
                'university_id' => 2,
                'degree_id' => 1,
                'department_id' => 3,
            ],
            [
                'name' => 'Master of Engineering',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'Advanced program in engineering.',
                'duration' => 2,
                'intake' => 'January',
                'fee_per_year' => 58000,
                'scholarship_percentage' => 25,
                'university_id' => 3,
                'degree_id' => 2,
                'department_id' => 1,
            ],
            [
                'name' => 'Bachelor of Business Administration',
                'image_url' => 'https://www.applyuni.com/Site_Files/Products/179209f.png',
                'description' => 'A comprehensive program covering all aspects of business administration.',
                'duration' => 4,
                'intake' => 'September',
                'fee_per_year' => 50000,
                'scholarship_percentage' => 20,
                'university_id' => 1,
                'degree_id' => 1,
                'department_id' => 1,
            ],
        ];


        DB::table('programs')->insert($programs);
    }
}
