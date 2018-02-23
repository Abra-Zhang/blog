<?php

use Illuminate\Database\Seeder;
use App\Models\Post;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = factory(Post::class)->times(50)->make();
        Post::insert($articles->toArray());
    }
}
