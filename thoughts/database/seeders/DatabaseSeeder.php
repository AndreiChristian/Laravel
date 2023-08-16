<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user1 = User::create([
            'name'=> 'Andrei',
            'email'=> 'andrei@gmail.com',
            'password'=> Hash::make('password'),
        ]);

        $user2 = User::create([
            'name'=> 'Sane',
            'email'=> 'sane@gmail.com',
            'password'=> Hash::make('password'),
        ]);

        Post::create([
            'user_id'=>$user1->id,
            'content'=>'Dummy posts'
        ]);

        Post::create([
            'user_id'=>$user2->id,
            'content'=>'Dummy posts nr 2'
        ]);

    }
}
