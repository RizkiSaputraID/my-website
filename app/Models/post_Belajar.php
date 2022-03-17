<?php

namespace App\Models;


class post  
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rizki Firnanda",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis reprehenderit
            placeat quae ipsam et!Quisquam hic eum laboriosam numquam temporibus impedit magnam optio 
            delectus minima, cupiditate sit quia ea nostrum non, eligendi molestiae nam voluptatum harum vero quo fuga a officia. 
            Perspiciatis debitis vel neque voluptatum asperiores pariatur qui modi error assumenda tenetur ea ipsa illo amet eveniet
            quasi adipisci placeat, sit dignissimos inventore natus? Inventore nostrum, deserunt itaque autem cumque voluptates
            placeat ducimus mollitia! Deserunt, cupiditate ipsa quaerat ex tempora officia quibusdam sit natus illo recusandae laborum maxime eaque perferendis nam.
            Inventore sint delectus amet ducimus a ea voluptas."
        ],
        [
            "title" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Saputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis reprehenderit
            placeat quae ipsam et!Quisquam hic eum laboriosam numquam temporibus impedit magnam optio 
            delectus minima, cupiditate sit quia ea nostrum non, eligendi molestiae nam voluptatum harum vero quo fuga a officia. 
            Perspiciatis debitis vel neque voluptatum asperiores pariatur qui modi error assumenda tenetur ea ipsa illo amet eveniet
            quasi adipisci placeat, sit dignissimos inventore natus? Inventore nostrum, deserunt itaque autem cumque voluptates
            placeat ducimus mollitia! Deserunt, cupiditate ipsa quaerat ex tempora officia quibusdam sit natus illo recusandae laborum maxime eaque perferendis nam.
            Inventore sint delectus amet ducimus a ea voluptas."
        ],
        ];

        public static function all()
        {
            return collect( self::$blog_posts);
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts -> firstWhere('slug', $slug);
        }

}
