@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    <div class="container-fluid" style="background: linear-gradient(180deg, rgba(58, 241, 158, 0.05) 0%, rgba(32, 176, 231, 0.05) 66.67%);">
        <div class="container pb-5 text-lg-left text-center px-lg-2 px-0" style="{{$agent->isDesktop() ? 'padding-top:90px' : 'padding-top: 20px;'}};">
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div class="col-lg-10 col-12">
                        <h1 class="fin-title rubik" style="{{$agent->isDesktop() ? '' : 'font-size: 25px; line-height: 30px;'}}">
                            Потребительские кредиты
                        </h1>
                        <p class="fin-desc pr-lg-5 pr-0 mb-0" style="padding-top: 30px;">
                            Мечтаетет обновить смартфон, но не можете выбрать, в кредит или в рассрочку? Мы знаем,
                            как вам помочь. Fin.kg — бесплатный финансовый помощник. Он поможет сравнить и выбрать самое лучшее предложение, а после без труда подать онлайн-заявку!
                        </p>
                        <a href="http://fin.kg/type_list/11">
                        <button class="btn fin-btn d-lg-block d-none" style="padding: 5px 40px; margin-top: 50px;">
                            Перейти
                        </button>
                        </a>
                        <div class="d-lg-none d-block mt-5">
                        <img class="img-fluid d-lg-none d-block" src="{{ asset('image/img/blimg1.webp') }}" alt="">
                            <a href="http://fin.kg/type_list/11">
                                <button class="btn fin-btn mt-5" style="padding: 5px 40px; margin-top: 50px;">
                                    Перейти
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 pl-4" style="padding-top: 60px;">
                        <div class="row">
                            @if($agent->isDesktop())
                            <div class="d-flex mr-lg-5 mr-0">
                                <div class="text-center">
                                    <img src="{{ asset('image/20.webp') }}" style="width: 131px;" alt="">
                                    <p class="fin-desc mb-0 pt-3">
                                        банков
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex mr-lg-5 mr-0">
                                <div class="text-center">
                                    <img src="{{ asset('image/300.webp') }}" style="width: 179px;" alt="">
                                    <p class="fin-desc mb-0 pt-3">
                                        предложений
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex mr-lg-5 mr-0">
                                <div class="text-center">
                                    <img src="{{ asset('image/100.webp') }}" style="width: 166px;" alt="">
                                    <p class="fin-desc mb-0 pt-3">
                                        пользователей
                                    </p>
                                </div>
                            </div>
                            @else
                                <div class="col-12">
                                    <div class="text-center">
                                        <img src="{{ asset('image/20.webp') }}" style="width: 131px;" alt="">
                                        <p class="fin-desc mb-0 pt-3">
                                            банков
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="text-center">
                                        <img src="{{ asset('image/300.webp') }}" style="width: 179px;" alt="">
                                        <p class="fin-desc mb-0 pt-3">
                                            предложений
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 mt-4">
                                    <div class="text-center">
                                        <img src="{{ asset('image/100.webp') }}" style="width: 166px;" alt="">
                                        <p class="fin-desc mb-0 pt-3">
                                            пользователей
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-5 d-lg-block d-none">
                    <img class="img-fluid" src="{{ asset('image/img/blimg1.webp') }}" alt="">
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid bg-white" style="padding: 65px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h2 class="fin-title-2 rubik text-lg-left text-center" style="{{$agent->isDesktop() ? 'font-size: 55px' : 'font-size: 25px'}}; ">
                        О нас
                    </h2>
                    <p class="fin-desc mt-3 pr-lg-5 pr-0 text-lg-left text-center" style="font-weight: 700!important;">
                        Fin.kg — ваш помощник в мире финансов, инвестиций и накоплений
                    </p>
                    <p class="fin-desc mt-3 pr-lg-5 pr-0 text-lg-left text-center">
                        Упрощает поиск финансовых услуг, подбирает лучшие банковские предложения, оформляет онлайн-заявки в одном сервисе.
                    </p>
                </div>
                <div class="col-lg-6 col-12 mt-lg-0 mt-3">
                    <div class="row">
                        <div class="col-4 px-0">
                            <img class="img-fluid" src="{{ asset('image/companies/baitushum.webp') }}" alt="">
                        </div>
                        <div class="col-4 px-0">
                            <img class="img-fluid" src="{{ asset('image/companies/optima.webp') }}" alt="">
                        </div>
                        <div class="col-4 px-0">
                            <img class="img-fluid" src="{{ asset('image/companies/finka.webp') }}" alt="">
                        </div>

                    </div>
                    <div class="row mt-5">
                        <div class="col-4 px-0">
                            <img class="img-fluid" src="{{ asset('image/companies/halyk_bank.webp') }}" alt="">
                        </div>
                        <div class="col-4 px-0">
                            <img class="img-fluid" src="{{ asset('image/companies/ayil.webp') }}" alt="">
                        </div>
                        <div class="col-4 px-0">
                            <img class="img-fluid" src="{{ asset('image/companies/fkb.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid" style="background: linear-gradient(275.58deg, rgba(58, 241, 158, 0.06) 0%, rgba(32, 176, 231, 0.06) 100%);">
        <div class="container pt-5 pb-4">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12 text-center">
                    <p class="font-weight-normal fin-desc" style="color: #000000; {{ $agent->isDesktop() ? 'font-size: 22px' : 'font-size: 18px' }}">
                        «Долго не мог оформить потребительский кредит, не было времени выбрать нужный банк и тариф. Сервис сам подобрал мне нужный вариант. Мы наконец-то обновили свою стиральную машину, жена очень рада»
                    </p>
                    <img style="width:50px; " src="{{ asset('image/img/MediaPerson.webp') }}" class="mb-3 mt-4" alt="User">
                    <p class="font-size-14 font-weight-normal" style="color: #000000;">
                        Садыр
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="{{ $agent->isDesktop() ? 'background-image: url('. asset('image/img/bg3.webp') .')' : '' }}; background-size: 100% 100%; background-position: center; background-repeat: no-repeat;">
        <div class="container" style="padding: 120px 0px;">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-lg-5">
                    <img class="img-fluid" src="{{ asset('image/img/3blimg.webp') }}" alt="Финансы стали проще">
                </div>
                <div class="col-12 col-lg-4 ml-lg-4 ml-0 mt-lg-0 mt-5 text-lg-left text-center">
                    <h3 class="rubik fin-title-2 text-lg-left text-center" style="{{ $agent->isDesktop() ? 'font-size: 35px' : 'font-size: 22px;'}}; line-height: 120%;">
                        Финансы стали проще
                    </h3>
                    <p class="fin-desc mt-3 text-lg-left text-center">
                        Выбрать оптимальный кредитный тариф стало проще. Наш сервис персонального подбора сделает это за вас!
                    </p>
                    <a href="http://fin.kg/type_list/11">
                    <button class="btn fin-btn inter" style="padding: 5px 40px; margin-top: 30px;">
                        Подобрать кредит
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: linear-gradient(275.58deg, rgba(58, 241, 158, 0.06) 0%, rgba(32, 176, 231, 0.06) 100%);">
        <div class="container pt-5 pb-4">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12 text-center">
                    <p class="font-weight-normal fin-desc" style="color: #000000; {{ $agent->isDesktop() ? 'font-size: 22px' : 'font-size: 18px;' }}">
                        “Пользуюсь сервисов уже второй раз. Все очень быстро работает, никаких минусов не увидел. Сервис сам подбирает лучший банк и кредитный тариф. Это очень быстро и удобно, не нужно даже выезжать из дома”
                    </p>
                    <img style="width:50px; " src="{{ asset('image/img/MediaPerson.webp') }}" class="mb-3 mt-4" alt="User">
                    <p class="font-size-14 font-weight-normal" style="color: #000000;">
                        Адилет
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-image: url({{ asset('image/img/bg4.webp') }}); background-size: cover; background-position: center;">
        <div class="container">
            <div class="row justify-content-between" style="padding-top: 100px; padding-bottom: 70px;">
                <div class="col-lg-4 col-12 text-lg-left text-center">
                    <h3 class="fin-title-2 text-lg-left text-center mt-lg-0 mt-5" style="{{$agent->isDesktop() ? 'font-size: 35px' : 'font-size: 22px'}};">
                        Все в один клик
                    </h3>
                    <p class="fin-desc" style="{{ $agent->isDesktop() ? 'padding-top: 72px;' : 'padding-top: 30px;'}}">
                        Долгий процесс поиска и оформления кредита теперь можно осуществить через один сервис и в один клик.
                    </p>
                    <a href="http://fin.kg/type_list/11">
                    <button class="btn fin-btn" style="padding: 5px 40px; margin-top: 50px;">
                        Подобрать кредит
                    </button>
                    </a>
                </div>
                <div class="col-lg-5 col-12 order-lg-last order-first my-lg-0 my-4">
                    <img class="img-fluid" src="{{ asset('image/img/4blimg.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: linear-gradient(275.58deg, rgba(58, 241, 158, 0.06) 0%, rgba(32, 176, 231, 0.06) 100%);">
        <div class="container pt-5 pb-4">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-12 text-center">
                    <p class="font-weight-normal fin-desc" style="color: #000000; {{$agent->isDesktop() ? 'font-size: 22px' : 'font-size: 18px;'}}">
                        «Сервис — супер! Выбрать самой нужный кредит всегда было очень нелегко для меня. А тут персональный подбор все сделал за меня, еще и с выгодной процентной ставкой»
                    </p>
                    <img style="width:50px; " src="{{ asset('image/img/MediaPerson.webp') }}" class="mb-3 mt-4" alt="User">
                    <p class="font-size-14 font-weight-normal" style="color: #000000;">
                        Аяна
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="{{ $agent->isDesktop() ? 'background-image: url('. asset('image/img/bg7.webp'). ')' : ''}}; background-size: cover; background-position: center;">
        <div class="container" style="padding-top: 72px; padding-bottom: 115px;">
            <div class="row justify-content-between">
                <div class="col-lg-6 col-12">
                    <img class="img-fluid" src="{{ asset('image/img/blimg7.webp') }}" alt="">
                </div>
                <div class="col-lg-4 col-12 d-flex align-items-center mt-lg-0 mt-5">
                    <div class="text-lg-left text-center">
                        <h3 class="rubik fin-title-2" style="{{$agent->isDesktop() ? 'font-size: 35px;' : 'font-size: 22px'}} color: #2e2e2e; line-height: 120%">
                            Совершенно бесплатно
                        </h3>
                        <p class="fin-desc" style="padding-top: 31px;">
                            Пользоваться сервисом Fin.kg может каждый, абсолютно бесплатно.
                        </p>
                        <a href="http://fin.kg/type_list/11">
                        <button class="btn fin-btn" style="padding: 5px 40px; {{ $agent->isDesktop() ? 'margin-top: 64px' : 'margin-top: 24px'}};">
                            Подобрать кредит
                        </button>
                        </a>
                    </div>
                </div>
                <div class="col-1 d-lg-block d-none"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-image: url({{ asset('image/img/bg8.webp') }}); background-size: cover; background-position: center;">
        <div class="container pt-5 pb-4 px-lg-3 px-0">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12 pr-lg-5 pr-0 text-lg-left text-center">
                    <h3 class="fin-title-2" style=" {{$agent->isDesktop() ? 'font-size: 35px' : 'font-size: 22px'}}; color: #2e2e2e; line-height: 120%;">
                        Хотите получать свежую информацию по бансковским продуктам?
                    </h3>
                    <p class="fin-desc pt-3" style="{{$agent->isDesktop() ? 'padding-right: 180px' : ''}};">
                        Оставьте свою электронную почту, чтобы быть в курсе самых выгодных предложений.
                    </p>
                </div>
                <div class="col-lg-6 col-12 px-lg-3 px-0 d-flex align-items-center justify-content-lg-start justify-content-center">
                    {{--<form class="text-lg-left text-center" action="">
                    <input class="form-control bg-transparent"  style="border: 1px solid #959595; border-radius: 10px;" type="text" placeholder="Имя">
                    <input class="form-control bg-transparent mt-4"  style="border: 1px solid #959595; border-radius: 10px;" type="email" placeholder="Ваш e-mail">
                        <button class="btn text-white border-0 mt-4" style="background: linear-gradient(180deg, #F96C4D 0%, #F18936 100%); border-radius: 10px; padding: 7px 32px;">
                            Подписаться
                        </button>
                    </form>--}}
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item mr-lg-2 mr-0">
                            <a href="#">
                                <img style="{{$agent->isMobile() ? 'width: 60px' : ''}}" src="{{ asset('image/icons/instagram.webp') }}" alt="Instagram">
                            </a>
                        </li>
                        <li class="list-inline-item mr-lg-2 mr-0">
                            <a href="#">
                                <img style="{{$agent->isMobile() ? 'width: 60px' : ''}}" src="{{ asset('image/icons/telegram.webp') }}" alt="telegram">
                            </a>
                        </li>
                        <li class="list-inline-item mr-lg-2 mr-0">
                            <a href="#">
                                <img style="{{$agent->isMobile() ? 'width: 60px' : ''}}" src="{{ asset('image/icons/facebook.webp') }}" alt="facebook">
                            </a>
                        </li>
                        <li class="list-inline-item mr-lg-2 mr-0">
                            <a href="#">
                                <img style="{{$agent->isMobile() ? 'width: 60px' : ''}}" src="{{ asset('image/icons/odnoklassniki.webp') }}" alt="odnoklassniki">
                            </a>
                        </li>
                        <li class="list-inline-item mr-lg-2 mr-0">
                            <a href="#">
                                <img style="{{$agent->isMobile() ? 'width: 60px' : ''}}" src="{{ asset('image/icons/mail.webp') }}" alt="mail">
                            </a>
                        </li>
                        <li class="text-lg-left text-center mr-lg-2 mr-0">
                            <button class="btn text-white border-0 mt-4" style="background: linear-gradient(180deg, #F96C4D 0%, #F18936 100%); border-radius: 10px; padding: 7px 32px;">
                                Подписаться
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-image: url({{ asset('image/img/bg9.webp') }}); background-size: 100% 100%; background-position: center;">
        <div class="container" style="{{ $agent->isDesktop() ? 'padding-top: 90px; padding-bottom: 30px;' : 'padding-top: 20px; padding-bottom: 20px;' }} ">
            <div class="row justify-content-between">
                <div class="col-1 d-lg-block d-none"></div>
                <div class="col-lg-5 col-6 d-flex align-items-center pr-lg-5 pr-0">
                    <div class="text-lg-left text-center">
                    <h3 class="rubik fin-title-2" style="{{$agent->isDesktop() ? 'font-size: 35px' : 'font-size: 22px'}}; color: #2e2e2e; line-height: 120%;">
                        Хочу оставить заявку на кредит
                    </h3>
                        <a href="http://fin.kg/type_list/11">
                    <button class="btn fin-btn" style=" margin-top: 40px; {{$agent->isDesktop() ? 'padding: 5px 40px;' : 'font-size: 9px; padding: 5px 10px;'}}">
                        Подобрать кредит
                    </button>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <img class="img-fluid" src="{{ asset('image/img/blimg9.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
