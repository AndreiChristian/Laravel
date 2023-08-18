<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Listing::create([
            'title' => 'Software Developer',
            'tags' => 'PHP, Laravel, Backend',
            'company' => 'TechCo Ltd.',
            'location' => 'San Francisco, CA',
            'email' => 'hr@techco.com',
            'website' => 'https://www.techco.com',
            'description' => 'We are looking for a passionate Software Developer with experience in PHP and Laravel to join our team at TechCo Ltd. The ideal candidate will have a strong background in web development and a passion for building scalable and efficient web applications.',
        ]);

        Listing::create([
            'title' => 'Frontend Developer',
            'tags' => 'JavaScript, React, CSS',
            'company' => 'DesignCorp Solutions',
            'location' => 'New York, NY',
            'email' => 'jobs@designcorp.com',
            'website' => 'https://www.designcorp.com',
            'description' => 'DesignCorp Solutions is seeking a Frontend Developer who is proficient in JavaScript, especially with React framework. The candidate will be responsible for building interactive and visually appealing web interfaces, collaborating with our design team, and ensuring a seamless user experience.',
        ]);


    }
}
