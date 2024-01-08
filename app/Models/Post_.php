<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "judul" => "Judul Post Dhany",
            "slug" => "judul-post-dhany",
            "penulis" => "Dhany Kurniawan",
            "isi" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint atque, beatae exercitationem quisquam aliquam ipsa iure ut praesentium facilis quas ducimus voluptatem aspernatur, debitis totam, architecto rerum consequatur dolorem optio quos eveniet odio tempora et doloribus animi? Quo veniam vero deleniti earum ipsam dolore corrupti dolores officiis ex consequuntur distinctio facilis quisquam deserunt magnam quaerat aperiam, eveniet inventore animi odit nesciunt perferendis. Magnam optio, exercitationem perspiciatis dolorem culpa, error saepe laboriosam voluptatum quod et corporis architecto fugiat vitae officiis ducimus."
        ],
        [
            "judul" => "Judul Post Sandhika",
            "slug" => "judul-post-sandhika",
            "penulis" => "Sandhika Galih",
            "isi" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam odio alias soluta numquam voluptatibus voluptates, error nisi dolores fuga vitae, exercitationem, voluptatem aspernatur dolorum animi perferendis eos culpa. Inventore hic voluptatem atque voluptas suscipit mollitia reprehenderit minus autem incidunt, cumque error enim illo corporis, vel, voluptates odio ratione velit delectus? Maxime, ut exercitationem. Voluptas architecto eveniet optio rerum reiciendis neque sint dolore aliquam mollitia doloribus at, ex voluptatibus sapiente distinctio consequatur vel officia dicta velit in hic explicabo maiores aut! Ut saepe, quis voluptatum repudiandae reiciendis veniam architecto iste quo, ab amet dolor labore fugiat a placeat quae, officia rem!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
