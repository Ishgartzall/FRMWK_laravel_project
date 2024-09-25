<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Category;
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
    
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(6), //create a sentence of approximately 6 words
            'author_id' => User::factory(),
            'category_id' => Category::inRandomOrder()->first()->id, // Assign random category
            'slug' => Str::slug(fake()->sentence()),
            'body' => fake()->text()
        ];
    }
}
