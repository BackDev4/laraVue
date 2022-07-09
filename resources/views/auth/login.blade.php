@extends('layouts.app')

@section('content')
    <form class="d-flex justify-content-center" method="post" action="{{ route('login') }}">
        @csrf
        <div class="d-flex flex-column">
            <div class="card-title fs-4 fw-bold">
                <span>Вход</span>
            </div>
            <div class="d-flex flex-column w-100">

                <input type="phone" value="{{ old('phone') }}" name="phone" placeholder="Телефон">

                <span>На этот номер придёт код безопасности</span>
            </div>
            <div class="mt-3">
                <input type="password" placeholder="Пароль" class="w-100" name="password">
            </div>
            <div class="mt-2">
                <button type="submit" class="btn btn-primary">Войти</button>
            </div>
            <div class="d-flex flex-column mt-3">
                <a href="{{ route('register.step.1') }}">Создать учётную запись</a>
                <a href="#">Я забыл пароль</a>
            </div>
        </div>
    </form>
@endsection
