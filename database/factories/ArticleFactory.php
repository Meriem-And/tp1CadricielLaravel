<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{

    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->word(),
            'contenu' => $this->faker->words(20),
            'langue' => 'fr',
            'user_id' => $this->faker->randomElement(User::pluck('id'))
        ];
    }
}
