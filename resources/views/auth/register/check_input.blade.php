@extends('layouts.app')

@section('content')
    @php($info = \Illuminate\Support\Facades\Session::get('businessInfo'))
    <form class="d-flex flex-column align-items-center" action="{{ route('register.step.3') }}" method="post">
        @csrf
        <div class="d-flex flex-column">
            <div>
                <span>Шаг 1 из 4</span>
            </div>
            <div class="card-title fs-4 fw-bold">
                <span>Реквизиты бизнеса</span>
            </div>
            <div class="d-flex">
                <input type="text" value="{{ $info['inn'] }}" placeholder="ИНН" style="width: 300px"  name="inn">
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
                    <input type="text" value="{{ $info['fullName'] }}" placeholder="ФИО" name="fullName">
                </div>
                <div class="d-flex flex-column ms-4">
                    <span>Дата регистрации</span>
                    <input value="{{ date('Y-m-d', $info['dateReg']) }}" type="date" name="dateReg">
                </div>
            </div>
            <div class="mt-3">
                <input type="text" value="{{ $info['ogrnip'] }}" placeholder="ОГРНИП" name="ogrnip">
            </div>
            <div class="mt-3">
                <input type="text" value="{{ $info['okved'] }}" placeholder="ОКВЭД" name="okved">
            </div>
            <div class="mt-3">
                <input type="text" value="{{ $info['address'] }}" placeholder="Адрес регистрации" class="w-100" name="address">
            </div>
            <div class="d-flex mt-3">
                <div>
                    <input type="text" value="{{ $info['nameOfServ'] }}" placeholder="Наименование налоговой" name="nameOfServ">
                </div>
                <div class="ms-4">
                    <input type="text" value="{{ $info['oktmo'] }}" placeholder="ОКТМО" name="oktmo">
                </div>
            </div>
            <div class="mt-3">
                <input type="text" value="{{ $info['taxCode'] }}" placeholder="Код налоговой" name="taxCode">
            </div>
        </div>

    </form>
@endsection
