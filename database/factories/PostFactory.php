<?php

namespace Database\Factories;

use App\Models\Model;   
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
 
/**
 * @extends Factory<Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {//author','content','post_id'
        return [
             'id'=> Str::uuid()->tostring(),
            'title'=>$this->faker->sentence(   5),
            'body'=>$this->faker->paragraph(14, true),
            'author'=>$this->faker->name(),
            'published'=>true,
            
        ];
    }
}
