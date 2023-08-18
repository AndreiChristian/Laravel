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

        // Entry 1
        Listing::create([
            'title' => 'Backend Developer',
            'tags' => 'Python, Django, API',
            'company' => 'WebTech Innovators',
            'location' => 'Los Angeles, CA',
            'email' => 'careers@webtech.com',
            'website' => 'https://www.webtech.com',
            'description' => 'WebTech Innovators is on the lookout for a Backend Developer experienced in Python and Django. Your primary focus will be developing server-side logic, ensuring high performance and responsiveness to requests from the frontend.',
        ]);

        // Entry 2
        Listing::create([
            'title' => 'Data Scientist',
            'tags' => 'Python, Machine Learning, Data Analysis',
            'company' => 'DataMind Analytics',
            'location' => 'Chicago, IL',
            'email' => 'hr@datamind.com',
            'website' => 'https://www.datamind.com',
            'description' => 'DataMind Analytics is hiring a Data Scientist adept in machine learning techniques, data modeling, and analytics. You will be responsible for interpreting complex data structures and developing algorithms.',
        ]);

        // Entry 3
        Listing::create([
            'title' => 'Mobile App Developer',
            'tags' => 'Swift, Kotlin, Flutter',
            'company' => 'AppNest Creations',
            'location' => 'Austin, TX',
            'email' => 'apply@appnest.com',
            'website' => 'https://www.appnest.com',
            'description' => 'Join AppNest Creations as a Mobile App Developer! We need someone skilled in Swift, Kotlin, or Flutter. Your role will include building and improving our existing mobile applications, ensuring both performance and responsiveness.',
        ]);

        // Entry 4
        Listing::create([
            'title' => 'UI/UX Designer',
            'tags' => 'Sketch, Figma, AdobeXD',
            'company' => 'PixelPerfect Studios',
            'location' => 'Seattle, WA',
            'email' => 'designjobs@pixelperfect.com',
            'website' => 'https://www.pixelperfect.com',
            'description' => 'PixelPerfect Studios is in search of a UI/UX Designer. The ideal candidate will have a portfolio showcasing innovative designs, proficiency in tools like Sketch and Figma, and a passion for creating user-centered interfaces.',
        ]);

        // Entry 5
        Listing::create([
            'title' => 'DevOps Engineer',
            'tags' => 'Docker, Kubernetes, CI/CD',
            'company' => 'CloudScape Technologies',
            'location' => 'San Francisco, CA',
            'email' => 'techjobs@cloudscape.com',
            'website' => 'https://www.cloudscape.com',
            'description' => 'CloudScape Technologies is hiring a DevOps Engineer. The role involves managing our infrastructure, ensuring high availability, and streamlining our operations and processes. Experience with tools like Docker and Kubernetes is crucial.',
        ]);

    }
}
