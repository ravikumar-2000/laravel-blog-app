<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();
        // Post::truncate();
        // Category::truncate();

        Post::factory(30)->create();


        // $user_ravi = User::create([
        //     'name' => 'Ravikumar Pande',
        //     'email' => 'ravikumarpande04@gmail.com',
        //     'password' => bcrypt('ravi@2000'),
        // ]);

        // $user_shinde = User::create([
        //     'name' => 'Devil Shinde',
        //     'email' => 'shinde.devil@gmail.com',
        //     'password' => bcrypt('devil@shinde'),
        // ]);

        // $category_personal = Category::create([
        //     'category_name' => 'Personal'
        // ]);

        // $category_work = Category::create([
        //     'category_name' => 'Work'
        // ]);

        // $category_hobby = Category::create([
        //     'category_name' => 'Hobby'
        // ]);

        // $post_1 = Post::create([
        //     'user_id' => $user_ravi->id,
        //     'category_id' => $category_personal->id,
        //     'title' => 'This is My First Post',
        //     'body' =>'Everyone is Happy NOW!',
        // ]);

        // $post_2 = Post::create([
        //     'user_id' => $user_ravi->id,
        //     'category_id' => $category_hobby->id,
        //     'title' => 'Wrestling is Hobby',
        //     'body' =>'I love to watch wrestling',
        // ]);

        // $post_3 = Post::create([
        //     'user_id' => $user_shinde->id,
        //     'category_id' => $category_work->id,
        //     'title' => 'We should talk about WORK only!',
        //     'body' =>'work is the best medicine to get healed',
        // ]);

    
    }
}
