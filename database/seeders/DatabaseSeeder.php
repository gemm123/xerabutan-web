<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        // User::create([
        //     'name' => ' rey',
        //     'email' => 're@gmail.com',
        //     'password' => bcrypt('1234')
        // ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming',
        ]);
        
        Post::factory(10)->create();
        
    }
}
