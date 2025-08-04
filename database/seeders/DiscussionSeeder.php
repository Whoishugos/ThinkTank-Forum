<?php

namespace Database\Seeders;

use App\Models\Discussion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DiscussionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 50; $i++) {
            Discussion::create([
                'user_id'           => rand(1, 50),
                'category_id'       => rand(1, 100),
                'title'             => fake()->sentence(),
                'slug'              => fake()->slug(),
                'content_preview'   => fake()->sentence(),
                'content'           => fake()->paragraph(),
                'views'             => rand(0, 1000),
            ]);
        }
    }
}
