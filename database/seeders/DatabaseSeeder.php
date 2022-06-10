<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Saputra',
            'username' => 'putra',
            'email' => 'saputra@gmail.com',
            'password' => bcrypt('password')
        ]);

        // User::create([
        //     'name' => 'Kiki',
        //     'email' => 'kiki@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora modi ipsam dicta cupiditate. Tempore explicabo, aliquid, soluta aliquam.',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto blanditiis eligendi labore ipsam, illo praesentium consequatur tempore dolorum voluptatibus quam deserunt itaque facere unde dignissimos veritatis quos vero! Eligendi iusto cum labore, repellat, ullam totam id incidunt quas nemo asperiores voluptatibus aliquam tempore molestias. Harum corrupti a ea magni quasi enim. </p><p>Ullam sit commodi maxime aliquam laboriosam iusto rem quis odit nobis vitae voluptatem dolorem iste, libero tempore voluptate! Consequuntur, ex voluptas. Possimus ex debitis ipsum necessitatibus enim repellendus earum officiis tenetur, minus eligendi, fugit laudantium, laboriosam hic deleniti. Et nihil illo voluptatum illum vitae nulla quaerat? Laboriosam, temporibus unde.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora modi ipsam dicta cupiditate. Tempore explicabo, aliquid, soluta aliquam.',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto blanditiis eligendi labore ipsam, illo praesentium consequatur tempore dolorum voluptatibus quam deserunt itaque facere unde dignissimos veritatis quos vero! Eligendi iusto cum labore, repellat, ullam totam id incidunt quas nemo asperiores voluptatibus aliquam tempore molestias. Harum corrupti a ea magni quasi enim. </p><p>Ullam sit commodi maxime aliquam laboriosam iusto rem quis odit nobis vitae voluptatem dolorem iste, libero tempore voluptate! Consequuntur, ex voluptas. Possimus ex debitis ipsum necessitatibus enim repellendus earum officiis tenetur, minus eligendi, fugit laudantium, laboriosam hic deleniti. Et nihil illo voluptatum illum vitae nulla quaerat? Laboriosam, temporibus unde.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora modi ipsam dicta cupiditate. Tempore explicabo, aliquid, soluta aliquam.',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto blanditiis eligendi labore ipsam, illo praesentium consequatur tempore dolorum voluptatibus quam deserunt itaque facere unde dignissimos veritatis quos vero! Eligendi iusto cum labore, repellat, ullam totam id incidunt quas nemo asperiores voluptatibus aliquam tempore molestias. Harum corrupti a ea magni quasi enim. </p><p>Ullam sit commodi maxime aliquam laboriosam iusto rem quis odit nobis vitae voluptatem dolorem iste, libero tempore voluptate! Consequuntur, ex voluptas. Possimus ex debitis ipsum necessitatibus enim repellendus earum officiis tenetur, minus eligendi, fugit laudantium, laboriosam hic deleniti. Et nihil illo voluptatum illum vitae nulla quaerat? Laboriosam, temporibus unde.</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora modi ipsam dicta cupiditate. Tempore explicabo, aliquid, soluta aliquam.',
        //     'body' => '<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto blanditiis eligendi labore ipsam, illo praesentium consequatur tempore dolorum voluptatibus quam deserunt itaque facere unde dignissimos veritatis quos vero! Eligendi iusto cum labore, repellat, ullam totam id incidunt quas nemo asperiores voluptatibus aliquam tempore molestias. Harum corrupti a ea magni quasi enim. </p><p>Ullam sit commodi maxime aliquam laboriosam iusto rem quis odit nobis vitae voluptatem dolorem iste, libero tempore voluptate! Consequuntur, ex voluptas. Possimus ex debitis ipsum necessitatibus enim repellendus earum officiis tenetur, minus eligendi, fugit laudantium, laboriosam hic deleniti. Et nihil illo voluptatum illum vitae nulla quaerat? Laboriosam, temporibus unde.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
