<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
    use App\Models\Post;
    use App\Models\User;
    use Faker\Factory as Faker;
    

class CommentSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
    
        // Assuming you have at least one Post and one User in your database
        $post = Post::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();
    
        // Create fake comments
        foreach (range(1, 10) as $index) {
            Comment::create([
                'body' => $faker->sentence,
                'post_id' => $post->id,
                'user_id' => $user->id,
            ]);
        }
    }
}
