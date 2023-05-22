<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog</h1>
        <div class='posts'>
            @foreach($posts as $post)
                <div class='post'> 
                    <h2 class='title'>
                        <a href="/posts/{{$post->id}}">{{ $post->title}}</a>
                    </h2>
                    <p class='body'>{{ $post->body}}</p>
                </div>
            @endforeach
        </div>
        <a href='/posts/create'>create</a>
        <div class='paginate'>
            {{$posts->links()}}
        </div>
    </body>
</html>