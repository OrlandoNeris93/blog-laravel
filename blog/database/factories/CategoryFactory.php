<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->unique()->word(10);
        return [
            //
            'name' => $name,
            'slug' => Str::slug($name),
            'image' =>'categories/'.$this->faker->image(storage_path('categories'),640,480,null,false),
            'is_featured' => $this->faker->boolean(),
            'status' => $this->faker->boolean(),
        ];
    }
}
