<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Post;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 20; $i++){

            $newPost = new Post();
            $newPost->title = 'Post numero'. ($i +1);
            $newPost->slug = Str::of($newPost->title)->slug('-');
            $newPost->content = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repudiandae atque nulla, reprehenderit quasi optio commodi accusantium maiores alias beatae perspiciatis qui quam, cum porro quis saepe, inventore nam debitis! Maiores.';
            
            $newPost->save();
        }
    }
}
