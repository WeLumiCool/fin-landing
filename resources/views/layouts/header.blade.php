<?php
use Jenssegers\Agent\Agent;

$agent = new Agent();
?>
<nav class="karty navbar navbar-expand-md navbar-light shadow-sm menuse shadow-none py-3 bg-white" style="position: sticky; top:0%; z-index: 99999;">
    <div class="karty container">
        <a class="karty navbar-brand" href="{{ url('/') }}">
            <img class="karty img-fluid" src="{{ asset('image/icons/logo.svg') }}" alt="">
        </a>
        <button class="karty navbar-toggler border-0 font-size-20" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="karty navbar-toggler-icon"></span>
        </button>

        <div class="karty collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <div class="karty navbar-nav mx-auto d-flex align-items-center" id="pick">
                <!-- Authentication Links -->
                <a href="#karty-about">
                    <span class="karty {{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.about_us') }}</span>
                </a>
                <a href="#karty-feedback">
                <span class="karty {{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.review') }}</span>
                </a>



            </div>
            <div class="karty navbar-nav ml-auto d-flex align-items-center">
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}" href="{{ route('language.switch', 'ru') }}">RU</a>
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}} mr-lg-3 mr-0" href="{{ route('language.switch', 'kg') }}">KG</a>
                <a href="https://fin.kg/type_list/27">
                    <button class="karty btn fin-btn" style="padding: 10px 32px;">
                        {{__('main.master')}}
                    </button>
                </a>
            </div>
        </div>

    </div>
</nav>
