<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
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
    public function definition(): array {
        return [
            'user_id' => User::factory(),
            'product_name' => $this->faker->word,
            'product_price' => $this->faker->randomFloat(2, 0, 5000),
            'description' => $this->faker->text,
            'image' => $this->faker->unique()->image(public_path('images/posts'), 600, 480, null, false),
            'stock' => $this->faker->randomDigit() . 'Kg'
        ];
    }
}
