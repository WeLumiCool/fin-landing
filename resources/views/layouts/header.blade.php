<?php
use Jenssegers\Agent\Agent;

$agent = new Agent();
?>
<nav class="kredit navbar navbar-expand-md navbar-light shadow-sm menuse shadow-none py-3 bg-white" style="position: sticky; top:0%; z-index: 99999;">
    <div class="kredit container">
        <a class="kredit navbar-brand" href="{{ url('/') }}">
            <img class="kredit img-fluid" src="{{ asset('image/icons/logo.svg') }}" alt="">
        </a>
        <button class="kredit navbar-toggler border-0 font-size-20" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="kredit navbar-toggler-icon"></span>
        </button>

        <div class="kredit collapse navbar-collapse" id="navbarSupportedContent1">
            <!-- Right Side Of Navbar -->
            <div class="kredit navbar-nav mx-auto d-flex align-items-center" id="pick1">
                <!-- Authentication Links -->
                <a href="#about-block">
                    <span class="kredit {{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.about_us') }}</span>
                </a>

                <a href="#feedback-block">
                <span class="kredit {{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">{{ __('main.review') }}</span>
                </a>



            </div>
            <div class="kredit navbar-nav ml-auto d-flex align-items-center">
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}" href="{{ route('language.switch', 'ru') }}">RU</a>
                <a class=
                   "{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}} mr-lg-3 mr-0" href="{{ route('language.switch', 'kg') }}">KG</a>
                <a href="http://fin.kg/type_list/11">
                    <button class="kredit btn fin-btn" style="padding: 7px 32px;">
                        {{__('main.master')}}
                    </button>
                </a>
            </div>
        </div>

    </div>
</nav>
