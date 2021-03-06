<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //TODO Buat Factory untuk Post pakai library faker

            'title' => $this->faker->sentence(mt_rand(2, 4)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(function ($p) {
                return "<p>$p</p>";
            })->implode(''),
            'user_id' => mt_rand(1, 7),
            'category_id' => mt_rand(1, 3)
        ];
    }
}
