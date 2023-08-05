@extends('tepmplate')
@section('title', 'Профиль')
@section('content')
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-9">
            <p><strong>Имя: </strong>{{auth()->user()->name}}</p>
            <p><strong>E-mail: </strong>{{auth()->user()->email}}</p>
            <p><strong>ID: </strong>{{auth()->user()->id}}</p>
        </div>
    </div>
@endsection
