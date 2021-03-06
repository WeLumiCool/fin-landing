<?php
use Jenssegers\Agent\Agent;

$agent = new Agent();
?>
<nav class="navbar navbar-expand-md navbar-light shadow-sm menuse shadow-none py-3 bg-white" style="position: sticky; top:0%; z-index: 99999;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="img-fluid" src="{{ asset('image/icons/logo.svg') }}" alt="">
        </a>
        <button class="navbar-toggler border-0 font-size-20" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Right Side Of Navbar -->
            <div class="navbar-nav mx-auto d-flex align-items-center" id="pick">
                <!-- Authentication Links -->
                <a href="#about">
                    <span class="{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.about_us') }}</span>
                </a>

                {{--<a href="">--}}
                {{--<span class="{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ _ }}</span>--}}
                {{--</a>--}}

                <a href="#feedback">
                <span class="{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.review') }}</span>
                </a>



            </div>
            <div class="navbar-nav ml-auto d-flex align-items-center">
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}" href="{{ route('language.switch', 'ru') }}">RU</a>
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}} mr-lg-3 mr-0" href="{{ route('language.switch', 'kg') }}">KG</a>
                <a href="http://fin.kg/newmaster/1#/">
                    <button class="btn fin-btn" style="padding: 10px 32px;">
                        {{__('main.master')}}
                    </button>
                </a>
            </div>
        </div>

    </div>
</nav>
