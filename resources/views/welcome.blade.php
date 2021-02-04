@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="background-image: url({{ asset('image/mainbg.webp') }}); background-position: right; background-size: cover;">
        <div class="container pb-5" style="padding-top:90px;">
            <div class="row">
                <div class="col-5">
                    <h1 class="fin-title rubik">
                        Какой-то текст описание
                    </h1>
                    <p class="fin-desc pr-5 mb-0" style="padding-top: 30px;">
                        Хотите оформить потребительский кредит на выгодных условиях? Но не можете определиться с банком? Мы знаем, как вам помочь.
                    </p>
                    <button class="btn fin-btn" style="padding: 5px 40px; margin-top: 50px;">
                        Перейти
                    </button>
                </div>
                <div class="col-12 pl-4" style="padding-top: 60px;">
                    <div class="row">
                        <div class="d-flex mr-5">
                            <div class="text-center">
                            <img src="{{ asset('image/20.webp') }}" style="width: 131px;" alt="">
                            <p class="fin-desc mb-0 pt-3">
                                банков
                            </p>
                            </div>
                        </div>
                        <div class="d-flex mr-5">
                            <div class="text-center">
                            <img src="{{ asset('image/300.webp') }}" style="width: 179px;" alt="">
                            <p class="fin-desc mb-0 pt-3">
                                предложений
                            </p>
                            </div>
                        </div>
                        <div class="d-flex mr-5">
                            <div class="text-center">
                            <img src="{{ asset('image/100.webp') }}" style="width: 166px;" alt="">
                            <p class="fin-desc mb-0 pt-3">
                                пользователей
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white" style="padding: 65px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2 class="fin-title-2 rubik" style="font-size: 55px;">
                        О нас
                    </h2>
                    <p class="fin-desc mt-3 pr-5">
                        Cillum excepteur incididunt fugiat quis ullamco sint sunt duis proident commodo quis. Exercitation deserunt est enim qui dolor sit reprehenderit exercitation laborum
                    </p>
                    <p class="fin-desc mt-3 pr-5">
                        Cillum excepteur incididunt fugiat quis ullamco sint sunt duis proident commodo quis. Exercitation deserunt est enim qui dolor sit reprehenderit exercitation laborum
                    </p>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4 px-0">
                            <img class="img-fluid" src="{{ asset('image/companies/baitushum.png') }}" alt="">
                        </div>
                        <div class="col-4 px-0">
                            <img class="img-fluid" src="{{ asset('image/companies/optima.png') }}" alt="">
                        </div>
                        <div class=""></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
