<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void {
        for ($i = 0; $i < 50; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->sentence(3);
            $newPost->argument = $faker->paragraph(5);
            $newPost->start_date = $faker->date();
            $newPost->end_date = $faker->date();
            $newPost->number_of_posts = $faker->numberBetween(1, 100);
            $newPost->collaborators = $faker->name();
            $newPost->save();
        }
    }
}