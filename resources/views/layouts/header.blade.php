<?php
use Jenssegers\Agent\Agent;

$agent = new Agent();
?>
<nav class="personalpodbor navbar navbar-expand-md navbar-light shadow-sm menuse shadow-none py-3 bg-white" style="position: sticky; top:0%; z-index: 99999;">
    <div class="personalpodbor container">
        <a class="personalpodbor navbar-brand" href="{{ url('/') }}">
            <img class="personalpodbor img-fluid" src="{{ asset('image/icons/logo.svg') }}" alt="">
        </a>
        <button class="personalpodbor navbar-toggler border-0 font-size-20" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="personalpodbor navbar-toggler-icon"></span>
        </button>

        <div class="personalpodbor collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <div class="personalpodbor navbar-nav mx-auto d-flex align-items-center" id="pick">
                <!-- Authentication Links -->
                <a href="#personalpodbor-about">
                    <span class="personalpodbor {{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.about_us') }}</span>
                </a>

                <a href="#personalpodbor-feedback">
                <span class="personalpodbor {{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.review') }}</span>
                </a>



            </div>
            <div class="personalpodbor navbar-nav ml-auto d-flex align-items-center">
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}" href="{{ route('language.switch', 'ru') }}">RU</a>
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}} mr-lg-3 mr-0" href="{{ route('language.switch', 'kg') }}">KG</a>
                <a href="http://fin.kg/newmaster/1#/">
                    <button class="personalpodbor btn fin-btn" style="padding: 10px 32px;">
                        {{__('main.master')}}
                    </button>
                </a>
            </div>
        </div>

    </div>
</nav>
