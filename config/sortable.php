<?php
return [
    'entities' => [
        'articles' => '\App\Article',
        'grouped_articles' => '\App\GroupedArticle',
        'posts' => [
            'entity' => '\App\Post',
            'relation' => 'tags'
        ]
    ]
];
