<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use App\Models\University;

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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'nomorhp' => '082112341234',
        ]);
        
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming',
        ]);
        Category::create([
            'name' => 'Design',
            'slug' => 'design',
        ]);
        University::create([
            'name' => 'IPB University',
            'slug' => 'ipb',
        ]);
        University::create([
            'name' => 'Universitas Indonesia',
            'slug' => 'ui',
        ]);
        University::create([
            'name' => 'Institut Teknologi Bandung',
            'slug' => 'itb',
        ]);
        Post::factory(10)->create();
        
    }
}
