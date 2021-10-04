<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sex = ['男', '女', '不明'];


        return [
            'name' => $this->faker->name(),
            'birthday' => $this->faker->date(),
            'age' => rand(10, 50),
            'birthplace_id' => rand(1, 47),
            'sex' => $sex[array_rand($sex)],
            'comment' => $this->faker->realText(50),
            'image' => 'article_image/' . rand(1, 17) . '.jpg',
        ];
    }
}
