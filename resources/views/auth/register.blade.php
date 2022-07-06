@extends('layouts.app')

@section('content')
    <form class="d-flex justify-content-center">
        <div class="d-flex flex-column">
            <div class="card-title fs-4 fw-bold">
                <h1>Регистрация</h1>
            </div>
            <div>
                <input type="text" placeholder="Имя" class="w-75">
            </div>
            <div class="d-flex flex-column mt-3 w-75">
                <input type="text" placeholder="Телефон">
                <span>На этот номер придёт код безопасности</span>
            </div>
            <div class="mt-3">
                <input type="email" placeholder="Email" class="w-75">
            </div>
            <div class="mt-3">
                <input type="password" placeholder="Придумайте пароль" class="w-75">
            </div>
            <div class="d-flex mt-3 w-75">
                <input type="checkbox">
                <p class="ms-2">Я принимаю
                    <span>условия оферты</span> и
                    <span>политики конфиденциальности</span>
                </p>
            </div>
            <div class="mt-2">
                <button type="submit" href="#" class="btn btn-primary">Зарегистрироваться</button>
            </div>
            <div class="d-flex flex-column mt-3">
                <a href="{{ route('login') }}">У меня уже есть аккаунт</a>
            </div>
        </div>
    </form>
@endsection
