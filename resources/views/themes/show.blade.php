<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Themes</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>投稿詳細ページ</h1>
        <h2 class="title">
            タイトル：{{ $theme->title }}
        </h1>

        <div class="footer">
            <p class="edit">[<a href="/themes/{{ $theme->id }}/edit">編集</a>]</p>
            <a href="/">一覧ページへ戻る</a>
            <p class='make'>[<a href='/themes/make'>make</a>]</p>
        </div>
    </body>
</html>