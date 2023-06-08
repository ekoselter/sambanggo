<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "eko p",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cum odit voluptatem ullam consequatur ea. Omnis nesciunt nulla quas optio. Alias porro provident quae possimus at nihil accusamus optio quis, facilis minus amet hic delectus? Magnam quae animi culpa ducimus, harum adipisci dicta debitis expedita non sunt id delectus repudiandae ratione autem placeat reprehenderit nesciunt velit aut officiis sequi dolorum consequatur dolore deleniti cupiditate. Recusandae aliquam, assumenda atque laboriosam quaerat necessitatibus eum ducimus. Expedita, qui voluptates. Quidem cum expedita magnam?"
        ],
        [
            "title" =>"judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "selter",
            "body" => "possimus at nihil accusamus optio quis, facilis minus amet hic delectus? Magnam quae animi culpa ducimus, harum adipisci dicta debitis expedita non sunt id delectus repudiandae ratione autem placeat reprehenderit nesciunt velit aut officiis sequi dolorum consequatur dolore deleniti cupiditate. Recusandae aliquam, assumenda atque laboriosam quaerat necessitatibus eum ducimus. Expedita, qui voluptates. Quidem cum expedita magnam Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque cum odit voluptatem ullam consequatur ea. Omnis nesciunt nulla quas optio. Alias porro provident quae possimus at nihil accusamus optio quis, facilis minus amet hic delectus? Magnam quae animi culpa ducimus, harum adipisci dicta debitis expedita non sunt id delectus repudiandae ratione autem placeat reprehenderit nesciunt velit aut officiis sequi dolorum consequatur dolore deleniti cupiditate. Recusandae aliquam, assumenda atque laboriosam quaerat necessitatibus eum ducimus. Expedita, qui voluptates. Quidem cum expedita magnam?"
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
