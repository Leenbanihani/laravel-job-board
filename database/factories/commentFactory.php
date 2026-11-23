<?php

namespace Database\Factories;

use App\Models\comment;
use App\Models\Model;   
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
 
/**
 * @extends Factory<Post>
 */
class commentFactory extends Factory
{
    protected $model = comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        
               'post_id'=> Post::factory(),
            'content'=>$this->faker->sentence(   5),
            'author'=>$this->faker->name()
        ];
    }
}
