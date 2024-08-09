<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
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
    ]],);
});
Route::get('/about', function () {
    return view('about', ['title' => 'About']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
Route::get('/posts/{slug}', function ($slug) {
    $posts = [
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

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });
    
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});
