@extends('layouts.app')

@section('content')
    <form class="d-flex flex-column align-items-center">
        <div class="d-flex flex-column">
            <div>
                <span>Шаг 1 из 4</span>
            </div>
            <div class="card-title fs-4 fw-bold">
                <span>Реквизиты бизнеса</span>
            </div>
            <div class="d-flex">
                <input type="text" placeholder="ИНН" style="width: 300px">
                <p class="ms-4" style="width: 208px;">Укажите ИНН. Все остальное соберем автоматически</p>
            </div>
            <div class="mt-2">
                <button type="submit" href="#" class="btn btn-primary" style="width: 300px;">Проверить</button>
            </div>
        </div>
        <div class="d-flex flex-column">
            <div>
                <h2>Проверьте, что всё верно или внесите исправления</h2>
            </div>
            <div class="d-flex">
                <div style="margin-top: 22px">
                    <input type="text" placeholder="ФИО">
                </div>
                <div class="d-flex flex-column ms-4">
                    <span>Дата регистрации</span>
                    <input type="date">
                </div>
            </div>
            <div class="mt-3">
                <input type="text" placeholder="ОРГНИП">
            </div>
            <div class="mt-3">
                <input type="text" placeholder="ОКВЭД">
            </div>
            <div class="mt-3">
                <input type="text" placeholder="Адрес регистрации" class="w-100">
            </div>
            <div class="d-flex mt-3">
                <div>
                    <input type="text" placeholder="Наименование налоговой">
                </div>
                <div class="ms-4">
                    <input type="text" placeholder="ОКТМО">
                </div>
            </div>
            <div class="mt-3">
                <input type="text" placeholder="Код налоговой">
            </div>
        </div>

    </form>
@endsection
