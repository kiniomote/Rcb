@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="h3 row">
            <div class="paragraph-marker-h3"></div>
            <div class="paragraph-h3">Лицензия</div>
        </div>
        <img src="{{ asset('images/license.jpg') }}" alt="" class="img-fluid">
        <br>
        <br>
        <div class="h3 row">
            <div class="paragraph-marker-h3"></div>
            <div class="paragraph-h3">Приложение к лицензии</div>
        </div>
        <img src="{{ asset('images/app_license.jpg') }}" alt="" class="img-fluid">
    </div>
@endsection
