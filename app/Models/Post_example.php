<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Richard Laurent",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit dignissimos itaque nostrum alias quibusdam incidunt tempora facilis doloremque voluptate placeat, consequuntur obcaecati corrupti a neque error aut, ra..."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam rem tempore minima eum! Quasi pariatur nobis a voluptate praesentium iste cum, voluptatibus natus accusantium temporibus cumque atque dolorum facili..."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        //TODO Ini pake foreach (Cara Lama)
        // $new_post = [];
        // foreach ($posts as $post) {
        //     if ($post['slug'] === $slug) {
        //         $new_post = $post;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
