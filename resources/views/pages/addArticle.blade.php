@extends('tepmplate')
@section('title', 'Добавить статью')
@section('content')
        <form action="/addArticle" method="post">
            @csrf
            <div class="mb-3">
                <input name="title" type="text" class="form-control" placeholder="Заголовок">
            </div>
            <div class="mb-3">
                <textarea name="article" class="form-control" placeholder="Контент"></textarea>
            </div>
            <div class="mb-3">
                <input type="text" name="author" placeholder="Автор" class="form-control">
            </div>
            <div class="mb-3">
                <input type="submit" value="Добавить статью" class="form-control btn btn-primary">
            </div>
        </form>
@endsection
