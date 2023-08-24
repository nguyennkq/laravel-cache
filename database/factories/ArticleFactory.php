<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>z
     */

     protected $model = Article::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(),
            'description' => $this->faker->paragraph(20)
        ];
    }
}
