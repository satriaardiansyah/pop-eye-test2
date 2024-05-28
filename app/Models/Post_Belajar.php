<?php

namespace App\Models;


class Post 
{
    static private $blog_posts = [
        [
            "title" => "Post 1",
            "slug" => "judul-post-pertama",
            "author" => "Satria Ardiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque inventore eum voluptatum, incidunt accusantium at vitae repudiandae cum autem, animi rem aliquam magnam blanditiis, ipsum sint earum consequatur. Error pariatur cumque blanditiis tempore voluptatibus reiciendis maiores quam rem est ex harum tenetur illum magni, laboriosam molestias dolorum iusto maxime id voluptas quae aperiam eveniet! Labore voluptatem vitae adipisci. Repellat placeat rem ut perspiciatis harum cumque hic aspernatur, vero odit aut voluptatem? Modi quia fugit rem nostrum animi quidem minima omnis."
            ],
            [
            "title" => "Post 2",
            "slug" => "judul-post-kedua",
            "author" => "Zilong Balmond",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores ratione ipsa impedit quod optio veniam ab praesentium in error ut perferendis repudiandae odit, accusantium hic exercitationem omnis aspernatur rem fugit quaerat temporibus? Unde maxime sint beatae deserunt esse, voluptatum saepe quis id natus nobis fugit excepturi neque vitae dicta! Nulla impedit cupiditate minima odio atque tenetur quibusdam quos culpa? Ipsam labore consequatur maiores pariatur tempore omnis dolores quas ea, quod laborum iste in facere laboriosam suscipit voluptatem vitae magnam libero at sed eum, asperiores earum? Accusantium quos officiis blanditiis minima reprehenderit laudantium adipisci, dolorem doloribus earum, doloremque, voluptatibus placeat repellendus?"
            ]
            ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
    //     // $post = [];    
    //     // foreach($posts as $p){
    //     //     if($p["slug"] === $slug){
    //     //         $post = $p;
    //     // }
    // }
    return $posts->firstWhere('slug', $slug);
    }
}
