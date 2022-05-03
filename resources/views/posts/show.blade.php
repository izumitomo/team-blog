<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">
            タイトル：{{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <p>本文：{{ $post->body }}</p>    
            </div>
        </div>
        <p>カテゴリー:<a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a></p>
        <div class="footer">
            <a href="/">戻る</a>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
        </div>
    </body>
</html>