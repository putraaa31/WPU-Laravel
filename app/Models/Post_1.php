<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        ["title" => "Judul Tulisan Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Saputra",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum ducimus et suscipit mollitia autem rem quasi fugit nesciunt, veniam eligendi illo libero quas facilis neque! Optio est consequuntur nihil ullam sequi, nisi error libero quidem, eaque cupiditate harum. Excepturi perspiciatis consectetur laudantium mollitia corporis sed rem fugiat esse eligendi dolor, nulla non laborum assumenda veritatis! Aperiam vitae natus tempora vel, voluptatibus veniam commodi iusto rem ipsum eum perspiciatis suscipit animi quisquam iste fugiat explicabo ipsa officia quo eius, distinctio magni."],
    
        ["title" => "Judul Tulisan Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Lala",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos aspernatur incidunt quod nobis, aut doloremque cum nemo sint, quis reiciendis, quaerat modi impedit pariatur sequi expedita. Harum a, repudiandae, sint dolor temporibus tempore facilis commodi explicabo quo non, ullam ut debitis. Recusandae harum optio esse error, perferendis voluptatum nam possimus voluptas, perspiciatis dolore corporis laboriosam doloremque minima distinctio consequuntur natus unde, tempora dignissimos impedit qui excepturi? Nisi sed nam eaque, ex reiciendis iure necessitatibus inventore suscipit sequi accusamus odio magni possimus quibusdam aliquid cum. Enim velit eveniet eum eos ipsum, laudantium, recusandae placeat fugiat odio temporibus dolores tempora sunt. Veritatis?"]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere("slug",$slug);
    }
}
