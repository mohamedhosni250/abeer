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
                'name' => 'Harvard University',
                'location' => 'Cambridge, MA, USA',
                'description' => 'Harvard University is a private Ivy League research university.',
                'featured_image' => 'https://example.com/harvard_featured_image.jpg',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/MIT_logo.svg'
            ],
            [
                'name' => 'Stanford University',
                'location' => 'Stanford, CA, USA',
                'description' => 'Stanford University is a private research university.',
                'featured_image' => 'https://example.com/stanford_featured_image.jpg',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/MIT_logo.svg'
            ],
            [
                'name' => 'Massachusetts Institute of Technology (MIT)',
                'location' => 'Cambridge, MA, USA',
                'description' => 'MIT is a private research university.',
                'featured_image' => 'https://example.com/mit_featured_image.jpg',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/MIT_logo.svg'
            ],
            [
                'name' => 'University of California, Berkeley',
                'location' => 'Berkeley, CA, USA',
                'description' => 'UC Berkeley is a public research university.',
                'featured_image' => 'https://example.com/ucb_featured_image.jpg',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/MIT_logo.svg'
            ],
            [
                'name' => 'University of Oxford',
                'location' => 'Oxford, England, UK',
                'description' => 'Oxford is a collegiate research university.',
                'featured_image' => 'https://example.com/oxford_featured_image.jpg',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/MIT_logo.svg'
            ],
            [
                'name' => 'California Institute of Technology (Caltech)',
                'location' => 'Pasadena, CA, USA',
                'description' => 'Caltech is a private research university.',
                'featured_image' => 'https://example.com/caltech_featured_image.jpg',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/MIT_logo.svg'
            ],
            [
                'name' => 'University of Cambridge',
                'location' => 'Cambridge, England, UK',
                'description' => 'Cambridge is a collegiate research university.',
                'featured_image' => 'https://example.com/cambridge_featured_image.jpg',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/MIT_logo.svg'
            ],
            [
                'name' => 'University of Chicago',
                'location' => 'Chicago, IL, USA',
                'description' => 'UChicago is a private research university.',
                'featured_image' => 'https://example.com/uchicago_featured_image.jpg',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/MIT_logo.svg'
            ],
            [
                'name' => 'Imperial College London',
                'location' => 'London, England, UK',
                'description' => 'Imperial College London is a public research university.',
                'featured_image' => 'https://example.com/imperial_featured_image.jpg',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/MIT_logo.svg'
            ],
            [
                'name' => 'ETH Zurich',
                'location' => 'Zurich, Switzerland',
                'description' => 'ETH Zurich is a public research university.',
                'featured_image' => 'https://example.com/ethz_featured_image.jpg',
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/MIT_logo.svg'
            ]
        ];

        DB::table('universities')->insert($universities);
    }
}
