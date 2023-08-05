@extends('tepmplate')
@section('title', 'Регистрация')
@section('content')
    <div class="col-sm-5 mx-auto">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/register" method="post">
            @csrf
            <div class="mb-3">
                <input name="name" type="text" class="form-control" placeholder="Имя">
            </div>
            <div class="mb-3">
                <input name="email" type="text" class="form-control" placeholder="E-mail">
            </div>
            <div class="mb-3">
                <input name="password" type="password" class="form-control" placeholder="Пароль">
            </div>
            <div class="mb-3">
                <input name="password_confirmation" type="password" class="form-control" placeholder="Подтверждение пароля">
            </div>
            <div class="mb-3">
                <input type="submit" value="Зарегистрироваться" class="form-control btn btn-primary">
            </div>
        </form>
    </div>
@endsection
