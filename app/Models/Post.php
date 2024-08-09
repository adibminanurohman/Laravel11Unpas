<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [

            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Adib Minanurohman',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dignissimos dolores cumque est fuga
                    voluptatum exercitationem minima illum itaque? Sit, aliquid. Non assumenda cum dicta atque maxime. Sunt,
                    repellendus laudantium.'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Adib Minanurohman',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dignissimos dolores cumque est fuga
                    voluptatum exercitationem minima illum itaque? Sit, aliquid. Non assumenda cum dicta atque maxime. Sunt,
                    repellendus laudantium.'
            ],
            [
                'id' => '3',
                'slug' => 'judul-artikel-3',
                'title' => 'Judul Artikel 3',
                'author' => 'Adib Minanurohman',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis dignissimos dolores cumque est fuga
                    voluptatum exercitationem minima illum itaque? Sit, aliquid. Non assumenda cum dicta atque maxime. Sunt,
                    repellendus laudantium.'
            ]
        ];
    }

    public static function find($slug): Array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
