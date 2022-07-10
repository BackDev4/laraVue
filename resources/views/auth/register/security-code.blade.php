@extends('layouts.app')

@section('content')
    <form class="d-flex justify-content-center" action="{{route('register.step.2') }}" method="post">
        @csrf
        <div class="d-flex flex-column align-items-center">
            <div class="card-title fs-4 fw-bold" style="width: 55%;">
                <h2>Введите код безопасности из СМС</h2>
            </div>
            <div class="d-flex" style="width: 55%;">
                <input type="text" name="code" id="code">
            </div>
            <div style="margin-right: 62px">
                <input type="submit" value="Проверить" class="btn btn-primary">
            </div>
            <div class="mt-2" style="width: 55%;">
                <span style="cursor: pointer;" id="btn">Отправить ещё раз</span>
            </div>
        </div>
    </form>
@endsection

