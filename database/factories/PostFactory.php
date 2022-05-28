<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(3,6)),
            'slug' => $this->faker->slug(),
            'harga' => 'Rp.200000',
            'category_id' => mt_rand(1,6),
            'user_id' => mt_rand(1,10),
            'university_id' => mt_rand(1,5),
            'body' => $this->faker->paragraph(mt_rand(40,200))
        ];
    }
}
