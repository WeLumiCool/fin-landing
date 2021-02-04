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
            <div class="navbar-nav mx-auto d-flex align-items-center">
                <!-- Authentication Links -->
                <a href="">
                <span class="{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">о нас</span>
                </a>

                <a href="">
                <span class="{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">партнеры</span>
                </a>

                <a href="">
                <span class="{{ $agent->isDesktop() ? 'fin-menu-point' : 'fin-menu-mobile'}}">отзывы</span>
                </a>

            </div>
            <div class="navbar-nav ml-auto d-flex align-items-center">
                <a href="http://fin.kg/newmaster/1#/">
                    <button class="btn fin-btn" style="padding: 10px 32px;">
                        Подбор мастер
                    </button>
                </a>
            </div>
        </div>

    </div>
</nav>