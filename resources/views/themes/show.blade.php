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
            お題：{{ $theme->title }}
        </h2>
        <div class='answers'>
            @foreach($answers as $answer)
                <div class='answer'>
                    <h2 class='title'>
                        <p>{{ $answer->body }}</p>
                    </h>
                </div>
            @endforeach
        </div>
        
        <form action="/themes/{{$theme->id}}" method="POST">
            @csrf
            <div class="title">
                <p>あなたの回答</p>
                <textarea name="body"/></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">一覧ページへ戻る</a>
        </div>
    </body>
</html>