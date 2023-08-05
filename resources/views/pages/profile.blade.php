@extends('tepmplate')
@section('title', 'Профиль')
@section('content')
    <div class="row">
        <div class="col-sm-5">
            <form action="/uploadAvatar" method="post" enctype="multipart/form-data">
                @csrf
                <input class="form-control" type="file" name="avatar">
                <input class="form-control btn btn-primary" type="submit" value="Загрузить аватарку">
            </form>
        </div>
        <div class="col-sm-7">
            <p><strong>Имя: </strong>{{auth()->user()->name}}</p>
            <p><strong>E-mail: </strong>{{auth()->user()->email}}</p>
            <p><strong>ID: </strong>{{auth()->user()->id}}</p>
        </div>
    </div>
@endsection
