@extends('tepmplate')
@section('title', 'Установить новый пароль')
@section('content')
    <div class="col-sm-8 mx-auto">
        <form method="POST" action="{{ route('password.store') }}">
        @csrf
        <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="mb-3">
                <input placeholder="Email" class="form-control" type="email" name="email" value="{{$request->email}}" required>
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" required placeholder="Новый пароль">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password_confirmation" required placeholder="Подтверждение пароля">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" value="Обновить пароль">
            </div>
        </form>
    </div>
@endsection
