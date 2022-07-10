@extends('layouts.app')

@section('content')
    <form class="d-flex justify-content-center" action="{{ route('register.step.3') }}"  method="post">
        @csrf
        <div class="d-flex flex-column">
            <div>
                <span>Шаг 1 из 4</span>
            </div>
            <div class="card-title fs-4 fw-bold">
                <h1>Реквизиты бизнеса</h1>
            </div>
            <div class="d-flex">
                <input type="text" placeholder="ИНН" style="width: 300px" name="inn">
                <p class="ms-4" style="width: 208px;">Укажите ИНН. Все остальное соберем автоматически</p>
            </div>
            <div class="mt-2">
                <button type="submit" href="#" class="btn btn-primary" style="width: 300px;">Проверить</button>
            </div>
        </div>
    </form>
@endsection
