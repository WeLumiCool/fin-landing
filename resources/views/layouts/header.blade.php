<?php
use Jenssegers\Agent\Agent;

$agent = new Agent();
?>
<nav class="depozit navbar navbar-expand-md navbar-light shadow-sm menuse shadow-none py-3 bg-white" style="position: sticky; top:0%; z-index: 99999;">
    <div class="depozit container">
        <a class="depozit navbar-brand" href="{{ url('/') }}">
            <img class="depozit img-fluid" src="{{ asset('image/icons/logo.svg') }}" alt="">
        </a>
        <button class="depozit navbar-toggler border-0 font-size-20" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="depozit navbar-toggler-icon"></span>
        </button>

        <div class="depozit collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <div class="depozit navbar-nav mx-auto d-flex align-items-center" id="pick">
                <!-- Authentication Links -->
                <a href="#depozit-about">
                    <span class="depozit {{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.about_us') }}</span>
                </a>
                <a href="#depozit-feedback">
                <span class="depozit {{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.review') }}</span>
                </a>



            </div>
            <div class="depozit navbar-nav ml-auto d-flex align-items-center">
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}" href="{{ route('language.switch', 'ru') }}">RU</a>
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}} mr-lg-3 mr-0" href="{{ route('language.switch', 'kg') }}">KG</a>
                <a href="https://fin.kg/type_list/9">
                    <button class="depozit btn fin-btn" style="padding: 10px 32px;">
                        {{__('main.master')}}
                    </button>
                </a>
            </div>
        </div>

    </div>
</nav>
