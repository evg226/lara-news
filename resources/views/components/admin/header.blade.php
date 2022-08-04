<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow pe-4 pe-md-0">
    <a class="navbar-brand col-md-3 col-lg-2 h4 text-uppercase m-0 px-3 fs-6" href="{{route('home')}}">GB Laravel</a>
    <div class="navbar-nav me-5 pe-1 me-md-0 d-flex flex-row">
        {{--        <div class="nav-item dropdown text-nowrap">--}}
        {{--            <a class="nav-link px-1 px-sm-3 dropdown-toggle"--}}
        {{--            >{{ Auth::user()->name }}</a>--}}
        {{--            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
        {{--                <a class="dropdown-item" href="{{ route('logout') }}"--}}
        {{--                   onclick="event.preventDefault();--}}
        {{--                            document.getElementById('logout-form').submit();"--}}
        {{--                >--}}
        {{--                    {{ __('Logout') }}--}}
        {{--                </a>--}}
        {{--                @include("components.signout")--}}
        {{--            </div>--}}
        {{--        </div>--}}


        <div class="nav-item dropdown px-1 px-sm-3">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-end position-absolute"
                 aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    <small>{{ __('Logout') }}</small>
                </a>
                @include("components.signout")
            </div>
        </div>

    </div>


    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>
