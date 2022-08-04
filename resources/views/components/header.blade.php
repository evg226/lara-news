<header>
    <div class="collapse bg-dark border-bottom border-secondary" id="navbarHeader">
        <div class="container">
            <div class="row py-3 row-cols-1 row-cols-sm-2 row-cols-lg-4 row-cols-xxl-5">
                <a href="{{route('home')}}" class="col py-2 text-decoration-none text-secondary
                @if(request()->routeIs('home')) text-light @endif">
                    <h5>Home</h5>
                    <small>Return to Home page</small>
                </a>
                <a href="{{route('categories')}}" class="col  py-2 text-decoration-none text-secondary
                @if(request()->routeIs('categories')) text-light @endif">
                    <h5>Categories</h5>
                    <small>View News Categories</small>
                </a>
                {{--                <a href="{{route('news')}}" class="col  py-2 text-decoration-none text-secondary--}}
                {{--                @if(request()->routeIs('news')) text-light @endif">--}}
                {{--                    <h5>News</h5>--}}
                {{--                    <small>Read All News</small>--}}
                {{--                </a>--}}
                <a href="{{route('feedback')}}" class="col  py-2 text-decoration-none text-secondary
                @if(request()->routeIs('feedback')) text-light @endif">
                    <h5>Feedback</h5>
                    <small>Send your feedback to us</small>
                </a>
                <a href="{{route('order')}}" class="col  py-2 text-decoration-none text-secondary
                @if(request()->routeIs('order')) text-light @endif">
                    <h5>Order</h5>
                    <small>Order for data from API</small>
                </a>
                @guest
                    <a href="{{route('login')}}" class="col  py-2 text-decoration-none text-secondary">
                        <h5>Sign in</h5>
                        <small>Sing in</small>
                    </a>
                @else
                    @if (\Illuminate\Support\Facades\Auth::user()->is_admin)
                        <a href="{{route('admin.')}}" class="col  py-2 text-decoration-none text-secondary">
                            <h5>Admin</h5>
                            <small>Go to admin panel {{\Illuminate\Support\Facades\Auth::user()->name}}</small>
                        </a>
                    @endif
                    <a href=""
                       class="col  py-2 text-decoration-none text-secondary"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <h5>Sign out</h5>
                        <small>Sign out {{\Illuminate\Support\Facades\Auth::user()->name}}</small>
                    </a>
                    @include("components.signout")
                @endguest
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
                <h4 class="text-uppercase m-0">GB laravel</h4>
            </a>
            <div class="d-flex align-content-center">
                <div class="nav-item dropdown pe-2 pe-sm-4">
                    @guest
                        <a class="nav-link text-light py-2" href="{{ route('login') }}">
                            Login
                        </a>
                    @else
                        <div id="navbarDropdown "
                             class="nav-link dropdown-toggle text-secondary py-2" href="" role="button"
                           data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </div>
                        <div class="dropdown-menu dropdown-menu-end position-absolute"
                             aria-labelledby="navbarDropdown">
                            @if (\Illuminate\Support\Facades\Auth::user()->is_admin)
                                <a href="{{route('admin.')}}" class="dropdown-item">
                                    Admin Panel
                                </a>
                            @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            @include("components.signout")
                        </div>
                    @endguest
                </div>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                        aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </div>
</header>
