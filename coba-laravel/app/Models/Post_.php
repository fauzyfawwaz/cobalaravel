<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Fasha Store",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo voluptates eaque eos. Cum, rerum veniam culpa aperiam provident sapiente, corrupti architecto dolorem, omnis eligendi repellat suscipit magnam? Esse tempore, a repudiandae mollitia excepturi modi nesciunt numquam amet at distinctio earum nemo possimus ducimus cum error nam aspernatur hic maxime praesentium? In minima nisi recusandae, tempora neque natus ea ipsam reprehenderit. Sit perspiciatis sapiente optio totam unde quidem. Nemo, quos debitis ex laborum ipsam praesentium consequatur amet sed doloribus corporis dignissimos?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Slash Store",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, voluptas excepturi nesciunt odio quo at. Sit rerum fugit nisi voluptatibus alias laudantium, magnam provident maiores qui dignissimos architecto laborum id. Quidem, doloribus? Amet tempora aut recusandae et placeat illo officia minus libero quo aliquid tenetur eveniet expedita deserunt laudantium repudiandae animi, ducimus provident nam quidem tempore! Minima, ducimus optio beatae tenetur sapiente pariatur sequi sunt maiores in laborum explicabo natus atque asperiores! Blanditiis ipsam labore ad deserunt temporibus veniam assumenda, perspiciatis dolores, similique, fugit itaque laborum atque? Itaque, possimus? Minima libero esse error praesentium consequatur illo ipsam repellat eveniet in."
        ]
    ];

    public static function all()
    {
        return collect (self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
