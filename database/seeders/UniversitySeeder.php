<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $universities = [
            [
                'name' => 'Asia Pacific University (APU)',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/APU-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/APU-1280-720-768x432.png',
                'starting_fee' => 7100,
                'ranking' => 87,
                'students_count' => 10000,
                'programs_count' => 30,
                'description' => 'Ranked 87, +10k students',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'Asia Pacific University is renowned for its high academic standards and global recognition...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],
            [
                'name' => 'City University Malaysia',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/CITY-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/CITY-1280-720-768x432.png',
                'starting_fee' => 2975,
                'ranking' => 51,
                'students_count' => 10000,
                'programs_count' => 20,
                'description' => 'Ranked 51, +10k students',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'City University Malaysia offers a wide range of programs and is known for its innovative teaching methods...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],
            [
                'name' => 'Infrastructure University Of Kuala Lumpur (IUKL)',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/IUKL-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/IUKL-1280-720-768x432.png',
                'starting_fee' => 4586,
                'ranking' => 37,
                'students_count' => 3300,
                'programs_count' => 15,
                'description' => 'Ranked 37, 3.3k students',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'IUKL is known for its excellent infrastructure and academic programs...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],
            [
                'name' => 'Lincoln University College',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/LINCOLN-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/LINCOLN-1280-720-768x432.png',
                'starting_fee' => 3300,
                'ranking' => 199,
                'students_count' => 15000,
                'programs_count' => 40,
                'description' => 'Ranked 199 QS Asia, 150+ programs',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'Lincoln University College is recognized for its diverse programs and strong academic reputation...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],
            [
                'name' => 'MAHSA University',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/MAHSA-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/MAHSA-1280-720-768x432.png',
                'starting_fee' => 3499,
                'ranking' => 20,
                'students_count' => 10000,
                'programs_count' => 25,
                'description' => 'Ranked 20, +10k students',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'MAHSA University is known for its focus on health sciences and excellent facilities...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],
            [
                'name' => 'Management & Science University (MSU)',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/MSU-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/MSU-1280-720-768x432.png',
                'starting_fee' => 4135,
                'ranking' => 121,
                'students_count' => 10000,
                'programs_count' => 35,
                'description' => 'Ranked 121, +10k students',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'MSU is a top-ranked university offering a variety of programs in science and management...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],
            [
                'name' => 'Multimedia University (MMU)',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/MMU-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/MMU-1280-720-768x432.png',
                'starting_fee' => 3000,
                'ranking' => 36,
                'students_count' => 10000,
                'programs_count' => 30,
                'description' => 'Ranked 36, +10k students',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'MMU is known for its strong focus on multimedia and creative technology programs...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],
            [
                'name' => 'SEGI University',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/SEGI-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/SEGI-1280-720-768x432.png',
                'starting_fee' => 3000,
                'ranking' => 46,
                'students_count' => 10000,
                'programs_count' => 20,
                'description' => 'Ranked 46, +10k students',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'SEGI University is one of the largest private higher education providers in Malaysia...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],   [
                'name' => 'TAYLOR’S University',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/TAYLORS-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/TAYLORS-1280-720-768x432.png',
                'starting_fee' => 4000,
                'ranking' => 79,
                'students_count' => 6000,
                'programs_count' => 25,
                'description' => 'Ranked 79, 6k students',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'TAYLOR’S University is known for its high-quality education and excellent student experience...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],
            [
                'name' => 'UCSI University',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/UCSI-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/UCSI-1280-720-768x432.png',
                'starting_fee' => 3918,
                'ranking' => 115,
                'students_count' => 10000,
                'programs_count' => 30,
                'description' => 'Ranked 115, +10k students',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'UCSI University is a leading institution known for its academic excellence and strong industry links...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],
            [
                'name' => 'UNITAR International University',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/UNITAR-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/UNITAR-1280-720-768x432.png',
                'starting_fee' => 2900,
                'ranking' => 5,
                'students_count' => 10000,
                'programs_count' => 20,
                'description' => '5-STAR QS Rating, +10k students',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'UNITAR is a pioneer in online education and provides a wide range of programs...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],
            [
                'name' => 'Universiti Tenaga Nasional (UNITEN)',
                'location_id' => 1,
                'logo' => 'https://myunis.com.my/wp-content/uploads/2023/08/UNITEN-300.png',
                'featured_image' => 'https://myunis.com.my/wp-content/uploads/2023/08/UNITEN-1280-720-768x432.png',
                'starting_fee' => 4625,
                'ranking' => 40,
                'students_count' => 10000,
                'programs_count' => 25,
                'description' => 'Ranked 40, +10k students',
                'created_at' => now(),
                'updated_at' => now(),
                'details' => [
                    [
                        'tab_name' => 'Overview',
                        'content' => 'UNITEN is a leading energy-focused university with strong industry partnerships...',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ],
                ],
            ],
            // Add more universities here...
        ];

        foreach ($universities as $university) {
            $details = $university['details'];
            unset($university['details']);
            $university['slug'] = $this->generateUniqueSlug($university['name']);
            $universityId = DB::table('universities')->insertGetId($university);

            foreach ($details as $detail) {
                $detail['university_id'] = $universityId;
                DB::table('university_details')->insert($detail);
            }
        }
    }

    private function generateUniqueSlug($name)
    {
        $slug = Str::slug($name);
        $count = DB::table('universities')->where('slug', 'LIKE', "{$slug}%")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }
}
