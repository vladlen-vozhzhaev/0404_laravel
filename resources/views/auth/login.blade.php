@extends('tepmplate')
@section('title', 'Авторизация')
@section('content')
    <div class="col-sm-8 mx-auto">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/login" method="post">
            @csrf
            <div class="mb-3">
                <input name="email" type="text" class="form-control" placeholder="E-mail">
            </div>
            <div class="mb-3">
                <input name="password" type="password" class="form-control" placeholder="Пароль">
            </div>
            <p>
                <a href="/forgot-password">Восстановление пароля</a>
            </p>
            <div class="mb-3">
                <input type="submit" value="Войти" class="form-control btn btn-primary">
            </div>
        </form>
    </div>
@endsection
