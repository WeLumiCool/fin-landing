@extends('layouts.app')
@section('content')
    <?php
    use Jenssegers\Agent\Agent;

    $agent = new Agent();
    ?>
    <div class="mikrozaym container-fluid"
         style="background: linear-gradient(180deg, rgba(58, 241, 158, 0.05) 0%, rgba(32, 176, 231, 0.05) 66.67%);">
        <div class="mikrozaym container pb-5 text-lg-left text-center px-lg-2 px-0"
             style="{{$agent->isDesktop() ? 'padding-top:90px' : 'padding-top: 20px;'}};">
            <div class="mikrozaym row">
                <div class="mikrozaym col-lg-7 col-12">
                    <div class="mikrozaym col-lg-10 col-12">
                        <h1 class="mikrozaym fin-title rubik"
                            style="{{$agent->isDesktop() ? '' : 'font-size: 25px; line-height: 30px;'}}">
                            {{ __('main.fb_title') }}
                        </h1>
                        <p class="mikrozaym fin-desc pr-lg-5 pr-0 mb-0" style="padding-top: 30px;">
                            {{ __('main.fb_desc') }}
                        </p>
                        <a href="http://fin.kg/type_list/17">
                            <button class="mikrozaym btn fin-btn d-lg-block d-none" style="padding: 5px 40px; margin-top: 50px;">
                                {{__('main.go_to')}}
                            </button>
                        </a>
                        <div class="mikrozaym d-lg-none d-block mt-5">
                            <img class="mikrozaym img-fluid d-lg-none d-block" src="{{ asset('image/img/blimg1.webp') }}" alt="">
                            <a href="http://fin.kg/type_list/17">
                                <button class="mikrozaym btn fin-btn mt-5" style="padding: 5px 40px; margin-top: 50px;">
                                    {{__('main.go_to')}}
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="mikrozaym col-12 pl-4" style="padding-top: 60px;">
                        <div class="mikrozaym row">
                            @if($agent->isDesktop())
                                <div class="mikrozaym d-flex mr-lg-5 mr-0">
                                    <div class="mikrozaym text-center">
                                        <img src="{{ asset('image/20.webp') }}" style="width: 131px;" alt="">
                                        <p class="mikrozaym fin-desc mb-0 pt-3">
                                            {{ __('main.banks') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="mikrozaym d-flex mr-lg-5 mr-0">
                                    <div class="mikrozaym text-center">
                                        <img src="{{ asset('image/300.webp') }}" style="width: 179px;" alt="">
                                        <p class="mikrozaym fin-desc mb-0 pt-3">
                                            {{ __('main.offers') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="mikrozaym d-flex mr-lg-5 mr-0">
                                    <div class="mikrozaym text-center">
                                        <img src="{{ asset('image/100.webp') }}" style="width: 166px;" alt="">
                                        <p class="mikrozaym fin-desc mb-0 pt-3">
                                            {{ __('main.users') }}
                                        </p>
                                    </div>
                                </div>
                            @else
                                <div class="mikrozaym col-12">
                                    <div class="mikrozaym text-center">
                                        <img src="{{ asset('image/20.webp') }}" style="width: 131px;" alt="">
                                        <p class="mikrozaym fin-desc mb-0 pt-3">
                                            {{ __('main.banks') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="mikrozaym col-12 mt-4">
                                    <div class="mikrozaym text-center">
                                        <img src="{{ asset('image/300.webp') }}" style="width: 179px;" alt="">
                                        <p class="mikrozaym fin-desc mb-0 pt-3">
                                            {{ __('main.offers') }}
                                        </p>
                                    </div>
                                </div>
                                <div class="mikrozaym col-12 mt-4">
                                    <div class="mikrozaym text-center">
                                        <img src="{{ asset('image/100.webp') }}" style="width: 166px;" alt="">
                                        <p class="mikrozaym fin-desc mb-0 pt-3">
                                            {{ __('main.users') }}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="mikrozaym col-5 d-lg-block d-none">
                    <img class="mikrozaym img-fluid" src="{{ asset('image/img/blimg1.webp') }}" alt="">
                </div>

            </div>
        </div>
    </div>
    <div class="mikrozaym container-fluid bg-white" id="mikrozaym-about" style="padding: 65px 0px;">
        <div class="mikrozaym container">
            <div class="mikrozaym row">
                <div class="mikrozaym col-lg-6 col-12">
                    <h2 class="mikrozaym fin-title-2 rubik text-lg-left text-center"
                        style="{{$agent->isDesktop() ? 'font-size: 55px' : 'font-size: 25px'}}; ">
                        {{ __('main.about_us') }}
                    </h2>
                    <p class="mikrozaym fin-desc mt-3 pr-lg-5 pr-0 text-lg-left text-center" style="font-weight: 700!important;">
                        {{ __('main.fin_kg') }}
                    </p>
                    <p class="mikrozaym fin-desc mt-3 pr-lg-5 pr-0 text-lg-left text-center">
                        {{ __('main.fin_kg_desc') }}
                    </p>
                </div>
                <div class="mikrozaym col-lg-6 col-12 mt-lg-0 mt-3">
                    <div class="mikrozaym row">
                        <div class="mikrozaym col-4 px-0">
                            <img class="mikrozaym img-fluid" src="{{ asset('image/companies/baitushum.webp') }}" alt="">
                        </div>
                        <div class="mikrozaym col-4 px-0">
                            <img class="mikrozaym img-fluid" src="{{ asset('image/companies/optima.webp') }}" alt="">
                        </div>
                        <div class="mikrozaym col-4 px-0">
                            <img class="mikrozaym img-fluid" src="{{ asset('image/companies/finka.webp') }}" alt="">
                        </div>

                    </div>
                    <div class="mikrozaym row mt-5">
                        <div class="mikrozaym col-4 px-0">
                            <img class="mikrozaym img-fluid" src="{{ asset('image/companies/halyk_bank.webp') }}" alt="">
                        </div>
                        <div class="mikrozaym col-4 px-0">
                            <img class="mikrozaym img-fluid" src="{{ asset('image/companies/ayil.webp') }}" alt="">
                        </div>
                        <div class="mikrozaym col-4 px-0">
                            <img class="mikrozaym img-fluid" src="{{ asset('image/companies/fkb.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="mikrozaym container-fluid"
         style="background: linear-gradient(275.58deg, rgba(58, 241, 158, 0.06) 0%, rgba(32, 176, 231, 0.06) 100%);">
        <div class="mikrozaym container pt-5 pb-4">
            <div class="mikrozaym row justify-content-center">
                <div class="mikrozaym col-lg-10 col-12 text-center">
                    <p class="mikrozaym font-weight-normal fin-desc"
                       style="color: #000000; {{ $agent->isDesktop() ? 'font-size: 22px' : 'font-size: 18px' }}">
                        {{ __('main.comment') }}
                    </p>
                    <img style="width:50px; " src="{{ asset('image/img/person2.webp') }}" class="mikrozaym mb-3 mt-4"
                         alt="User">
                    <p class="mikrozaym font-size-14 font-weight-normal" style="color: #000000;">
                        Садыр
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="mikrozaym container-fluid"
         style="{{ $agent->isDesktop() ? 'background-image: url('. asset('image/img/bg3.webp') .')' : '' }}; background-size: 100% 100%; background-position: center; background-repeat: no-repeat;">
        <div class="mikrozaym container" style="padding: 120px 0px;">
            <div class="mikrozaym row justify-content-center align-items-center">
                <div class="mikrozaym col-12 col-lg-5">
                    <img class="mikrozaym img-fluid" src="{{ asset('image/img/3blimg.webp') }}" alt="Финансы стали проще">
                </div>
                <div class="mikrozaym col-12 col-lg-4 ml-lg-4 ml-0 mt-lg-0 mt-5 text-lg-left text-center">
                    <h3 class="mikrozaym rubik fin-title-2 text-lg-left text-center"
                        style="{{ $agent->isDesktop() ? 'font-size: 35px' : 'font-size: 22px;'}}; line-height: 120%;">
                        {{ __('main.tb_title') }}
                    </h3>
                    <p class="mikrozaym fin-desc mt-3 text-lg-left text-center">
                        {{ __('main.tb_desc') }}
                    </p>
                    <a href="http://fin.kg/type_list/17">
                        <button class="mikrozaym btn fin-btn inter" style="padding: 5px 40px; margin-top: 30px;">
                            {{ __('main.master') }}
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mikrozaym container-fluid"
         style="background: linear-gradient(275.58deg, rgba(58, 241, 158, 0.06) 0%, rgba(32, 176, 231, 0.06) 100%);" id="mikrozaym-feedback">
        <div class="mikrozaym container pt-5 pb-4">
            <div class="mikrozaym row justify-content-center">
                <div class="mikrozaym col-lg-9 col-12 text-center">
                    <p class="mikrozaym font-weight-normal fin-desc"
                       style="color: #000000; {{ $agent->isDesktop() ? 'font-size: 22px' : 'font-size: 18px;' }}">
                        {{ __('main.comment_second') }}
                    </p>
                    <img style="width:50px; " src="{{ asset('image/img/person1.webp') }}" class="mikrozaym mb-3 mt-4"
                         alt="User">
                    <p class="mikrozaym font-size-14 font-weight-normal" style="color: #000000;">
                        Адилет
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="mikrozaym container-fluid"
         style="background-image: url({{ asset('image/img/bg4.webp') }}); background-size: cover; background-position: center;">
        <div class="mikrozaym container">
            <div class="mikrozaym row justify-content-between" style="padding-top: 100px; padding-bottom: 70px;">
                <div class="mikrozaym col-lg-4 col-12 text-lg-left text-center">
                    <h3 class="mikrozaym fin-title-2 text-lg-left text-center mt-lg-0 mt-5"
                        style="{{$agent->isDesktop() ? 'font-size: 35px' : 'font-size: 22px'}};">
                        {{__('main.fourth_b_title')}}
                    </h3>
                    <p class="mikrozaym fin-desc" style="{{ $agent->isDesktop() ? 'padding-top: 72px;' : 'padding-top: 30px;'}}">
                        {{ __('main.fourth_b_desc') }}
                    </p>
                    <a href="http://fin.kg/type_list/17">
                        <button class="mikrozaym btn fin-btn" style="padding: 5px 40px; margin-top: 50px;">
                            {{ __('main.master') }}
                        </button>
                    </a>
                </div>
                <div class="mikrozaym col-lg-5 col-12 order-lg-last order-first my-lg-0 my-4">
                    <img class="mikrozaym img-fluid" src="{{ asset('image/img/4blimg.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="mikrozaym container-fluid"
         style="background: linear-gradient(275.58deg, rgba(58, 241, 158, 0.06) 0%, rgba(32, 176, 231, 0.06) 100%);">
        <div class="mikrozaym container pt-5 pb-4">
            <div class="mikrozaym row justify-content-center">
                <div class="mikrozaym col-lg-9 col-12 text-center">
                    <p class="mikrozaym font-weight-normal fin-desc"
                       style="color: #000000; {{$agent->isDesktop() ? 'font-size: 22px' : 'font-size: 18px;'}}">
                        {{ __('main.comment_third') }}
                    </p>
                    <img style="width:50px; " src="{{ asset('image/img/women1.webp') }}" class="mikrozaym mb-3 mt-4"
                         alt="User">
                    <p class="mikrozaym font-size-14 font-weight-normal" style="color: #000000;">
                        Аяна
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="mikrozaym container-fluid"
         style="{{ $agent->isDesktop() ? 'background-image: url('. asset('image/img/bg7.webp'). ')' : ''}}; background-size: cover; background-position: center;">
        <div class="mikrozaym container" style="padding-top: 72px; padding-bottom: 115px;">
            <div class="mikrozaym row justify-content-between">
                <div class="mikrozaym col-lg-6 col-12">
                    <img class="mikrozaym img-fluid" src="{{ asset('image/img/blimg7.webp') }}" alt="">
                </div>
                <div class="mikrozaym col-lg-4 col-12 d-flex align-items-center mt-lg-0 mt-5">
                    <div class="mikrozaym text-lg-left text-center">
                        <h3 class="mikrozaym rubik fin-title-2"
                            style="{{$agent->isDesktop() ? 'font-size: 35px;' : 'font-size: 22px'}} color: #2e2e2e; line-height: 120%">
                            {{ __('main.fifth_b_title') }}
                        </h3>
                        <p class="mikrozaym fin-desc" style="padding-top: 31px;">
                            {{ __('main.fifth_b_desc') }}
                        </p>
                        <a href="http://fin.kg/type_list/17">
                            <button class="mikrozaym btn fin-btn"
                                    style="padding: 5px 40px; {{ $agent->isDesktop() ? 'margin-top: 64px' : 'margin-top: 24px'}};">
                                {{ __('main.master') }}
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mikrozaym col-1 d-lg-block d-none"></div>
            </div>
        </div>
    </div>
    <div class="mikrozaym container-fluid"
         style="background-image: url({{ asset('image/img/bg8.webp') }}); background-size: cover; background-position: center;">
        <div class="mikrozaym container pt-5 pb-4 px-lg-3 px-0">
            <div class="mikrozaym row justify-content-center">
                <div class="mikrozaym col-lg-6 col-12 pr-lg-5 pr-0 text-lg-left text-center">
                    <h3 class="mikrozaym fin-title-2"
                        style=" {{$agent->isDesktop() ? 'font-size: 35px' : 'font-size: 22px'}}; color: #2e2e2e; line-height: 120%;">
                        {{ __('main.sb_title') }}
                    </h3>
                    <p class="mikrozaym fin-desc pt-3" style="{{$agent->isDesktop() ? 'padding-right: 180px' : ''}};">
                        {{ __('main.sb_desc') }}
                    </p>
                </div>
                <div
                    class="mikrozaym col-lg-6 col-12 px-lg-3 px-0 d-flex align-items-center justify-content-lg-start justify-content-center">
                    <ul class="mikrozaym list-unstyled list-inline">
                        <li class="mikrozaym list-inline-item mr-lg-2 mr-0">
                            <a href="https://www.instagram.com/fin.kg_media/">
                                <div class="mikrozaym bg-white d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; border-radius: 5px;">
                                    <i class="mikrozaym fab fa-instagram social-ico-2 fa-2x"></i>
                                </div>
                            </a>
                        </li>
                        <li class="mikrozaym list-inline-item mr-lg-2 mr-0">
                            <a href="https://t.me/fin_kg">
                                <div class="mikrozaym bg-white d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; border-radius: 5px;">
                                    <i class="mikrozaym fab fa-telegram-plane social-ico-2 fa-2x"></i>
                                </div>
                            </a>
                        </li>
                        <li class="mikrozaym list-inline-item mr-lg-2 mr-0">
                            <a href="https://www.facebook.com/Finkg-100368308735998">
                                <div class="mikrozaym bg-white d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; border-radius: 5px;">
                                    <i class="mikrozaym fab fa-facebook-square social-ico-2 fa-2x"></i>
                                </div>
                            </a>
                        </li>
                        <li class="mikrozaym list-inline-item mr-lg-2 mr-0">
                            <a href="https://ok.ru/group/65850950418465">
                                <div class="mikrozaym bg-white d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; border-radius: 5px;">
                                    <i class="mikrozaym fab fa-odnoklassniki social-ico-2 fa-2x"></i>
                                </div>
                            </a>
                        </li>
                        <li class="mikrozaym list-inline-item mr-lg-2 mr-0">
                            <a href="https://twitter.com/Finkg_media">
                                <div class="mikrozaym bg-white d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; border-radius: 5px;">
                                    <i class="mikrozaym fab fa-twitter social-ico-2 fa-2x"></i>
                                </div>
                            </a>
                        </li>
                        <li class="mikrozaym list-inline-item mr-lg-2 mr-0">
                            <a href="https://vk.com/public201397360">
                                <div class="mikrozaym bg-white d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; border-radius: 5px;">
                                    <i class="mikrozaym fab fa-vk social-ico-2 fa-2x"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mikrozaym container-fluid"
         style="background-image: url({{ asset('image/img/bg9.webp') }}); background-size: 100% 100%; background-position: center;">
        <div class="mikrozaym container"
             style="{{ $agent->isDesktop() ? 'padding-top: 90px; padding-bottom: 30px;' : 'padding-top: 20px; padding-bottom: 20px;' }} ">
            <div class="mikrozaym row justify-content-between">
                <div class="mikrozaym col-1 d-lg-block d-none"></div>
                <div class="mikrozaym col-lg-5 col-6 d-flex align-items-center pr-lg-5 pr-0">
                    <div class="mikrozaym text-lg-left text-center">
                        <h3 class="mikrozaym rubik fin-title-2"
                            style="{{$agent->isDesktop() ? 'font-size: 35px' : 'font-size: 22px'}}; color: #2e2e2e; line-height: 120%;">
                            {{ __('main.seventh_b_title') }}
                        </h3>
                        <a href="http://fin.kg/type_list/17">
                            <button class="mikrozaym btn fin-btn"
                                    style=" margin-top: 40px; {{$agent->isDesktop() ? 'padding: 5px 40px;' : 'font-size: 9px; padding: 5px 10px;'}}">
                                {{ __('main.master') }}
                            </button>
                        </a>
                    </div>
                </div>
                <div class="mikrozaym col-6">
                    <img class="mikrozaym img-fluid" src="{{ asset('image/img/blimg9.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
