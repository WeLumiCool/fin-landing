<?php
use Jenssegers\Agent\Agent;

$agent = new Agent();
?>
<nav class="mikrozaym navbar navbar-expand-md navbar-light shadow-sm menuse shadow-none py-3 bg-white" style="position: sticky; top:0%; z-index: 99999;">
    <div class="mikrozaym container">
        <a class="mikrozaym navbar-brand" href="{{ url('/') }}">
            <img class="mikrozaym img-fluid" src="{{ asset('image/icons/logo.svg') }}" alt="">
        </a>
        <button class="mikrozaym navbar-toggler border-0 font-size-20" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="mikrozaym navbar-toggler-icon"></span>
        </button>

        <div class="mikrozaym collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <div class="mikrozaym navbar-nav mx-auto d-flex align-items-center" id="pick">
                <!-- Authentication Links -->
                <a href="#mikrozaym-about">
                    <span class="mikrozaym {{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.about_us') }}</span>
                </a>


                <a href="#mikrozaym-feedback">
                <span class="mikrozaym {{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.review') }}</span>
                </a>



            </div>
            <div class="mikrozaym navbar-nav ml-auto d-flex align-items-center">
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}" href="{{ route('language.switch', 'ru') }}">RU</a>
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}} mr-lg-3 mr-0" href="{{ route('language.switch', 'kg') }}">KG</a>
                <a href="http://fin.kg/type_list/17">
                    <button class="mikrozaym btn fin-btn" style="padding: 10px 32px;">
                        {{__('main.master')}}
                    </button>
                </a>
            </div>
        </div>

    </div>
</nav>
