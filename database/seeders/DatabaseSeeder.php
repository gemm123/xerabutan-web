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
            'name' => 'freelancer',
            'email' => 'freelancer@gmail.com',
            'password' => bcrypt('12345678'),
            'nomorhp' => '0812345678',
            'is_admin' => '0',
        ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'nomorhp' => '089876543',
            'is_admin' => '1',
            'university_id' => '1'
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
        Category::create([
            'name' => 'Writing',
            'slug' => 'writing',
        ]);
        Category::create([
            'name' => 'Translation',
            'slug' => 'translation',
        ]);
        Category::create([
            'name' => 'Music',
            'slug' => 'music',
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
        University::create([
            'name' => 'Universitas Brawijaya',
            'slug' => 'ub',
        ]);
        University::create([
            'name' => 'Institut Teknologi Sepuluh Nopember',
            'slug' => 'its',
        ]);
        Post::factory(10)->create();
        
    }
}
