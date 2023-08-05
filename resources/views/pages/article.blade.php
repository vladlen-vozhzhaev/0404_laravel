@extends('tepmplate')
@section('title', $article->title)
@section('content')
    <p>{{$article->article}}</p>
    <p>{{$article->author}}</p>
    <p><a href="/deleteArticle/{{$article->id}}">[удалить]</a></p>
    <div>
        <form action="/addComment" method="post">
            @csrf
            <input type="hidden" name="articleId" value="{{$article->id}}">
            <textarea name="comment" placeholder="Комментарий" class="form-control"></textarea>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
    <div class="my-3">
        @foreach($comments as $comment)
            <div class="border my-2">
                <p>{{$comment->username}}</p>
                <p>{{$comment->comment}}</p>
            </div>
        @endforeach
    </div>
@endsection
