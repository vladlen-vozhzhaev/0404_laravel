@extends('tepmplate')
@section('title', 'Восстановление пароля')
@section('content')
    <div class="mb-4">
        Забыли пароль? Без проблем. Просто сообщите нам свой адрес электронной почты, и мы отправим вам ссылку для сброса пароля, которая позволит вам выбрать новый.
    </div>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-3">
            <input class="form-control" placeholder="Email" type="email" name="email">
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-primary">
        </div>
    </form>
@endsection
