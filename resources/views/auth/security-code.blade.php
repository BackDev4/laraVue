@extends('layouts.app')

@section('content')
    <form class="d-flex justify-content-center">
        <div class="d-flex flex-column align-items-center">
            <div class="card-title fs-4 fw-bold" style="width: 55%;">
                <h1>Введите код безопасности</h1>
            </div>
            <div style="width: 55%;">
                <p>Это последние 4 цифры номера, с которого вам поступил звонок на номер</p>
                <span class="fw-bold">+375 29 234 12 42.</span>
            </div>
            <div class="mt-2 mb-2" style="width: 55%;">
                <span>Пример: +7 495 123 45 67</span>
            </div>
            <div class="d-flex" style="width: 55%;">
                <div>
                    <input type="number" style="width: 48px; height: 56px; border-radius: 12px">
                </div>
                <div class="ms-2">
                    <input type="number" style="width: 48px; height: 56px; border-radius: 12px">
                </div>
                <div class="ms-2">
                    <input type="number" style="width: 48px; height: 56px; border-radius: 12px">
                </div>
                <div class="ms-2">
                    <input type="number" style="width: 48px; height: 56px; border-radius: 12px">
                </div>
            </div>
            <div class="mt-2" style="width: 55%;">
                <span style="cursor: pointer;">Отправить ещё раз</span>
            </div>
        </div>
    </form>
@endsection
