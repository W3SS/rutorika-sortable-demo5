<?php
return [
    'entities' => [
        'articles' => '\App\Article',
        'grouped_articles' => '\App\GroupedArticle',

        'posts' => [
            'entity' => '\App\Post',
            'relation' => 'authors'
        ],

        'video' => [
            'entity' => '\App\Author',
            'relation' => 'videos'
        ],

        'album' => [
            'entity' => '\App\Author',
            'relation' => 'albums'
        ]
    ]
];
