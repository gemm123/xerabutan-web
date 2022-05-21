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
        //\App\Models\User::factory(10)->create();
        User::create([
            'name' => ' rey',
            'email' => 're@gmail.com',
            'password' => bcrypt('1234')
        ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming',
        ]);
        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming',
        ]);
        Post::create([
            'title' => 'Freelance Esai Murah',
            'slug' => 'freelance-esai-murah',
            'category_id' => 2,
            'user_id' => 1,
            'university' => 'Universitas Indonesia',
            'excerpt' => 'nbvcxsdfghj uytrewerty jhgfdcvbn juyhtrd fghji uytgfvbnjkiuytfvbnjk iuytgfvbnjuytgf bjuytgfvbnmjuyhgtfv bnjuhg ',
            'body' => 'jbhssfcauhonv vsdfdg ngfds sddfgsdvbg bs'
        ]);
        Post::create([
            'title' => 'Freelance Murah',
            'slug' => 'freelance-murah',
            'category_id' => 1,
            'user_id' => 1,
            'university' => 'Universitas Indonesia',
            'excerpt' => 'nbvcxsdfghj uytrewerty jhgfdcvbn juyhtrd fghji uytgfvbnjkiuytfvbnjk iuytgfvbnjuytgf bjuytgfvbnmjuyhgtfv bnjuhg ',
            'body' => 'jbhssfcauhonv vsdfdg ngfds sddfgsdvbg bs'
        ]);
        
    }
}
