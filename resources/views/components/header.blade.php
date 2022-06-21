<header>
    <div class="collapse bg-dark border-bottom border-secondary" id="navbarHeader">
        <div class="container">
            <div class="row py-3">
                <a href="{{route('home')}}" class="col-sm-8 col-md-7 py-2 text-decoration-none">
                    <h5 class="text-white">Home</h5>
                    <small class="text-white">Return to Home page</small>
                </a>
                <a href="{{route('categories.')}}" class="col-sm-8 col-md-7 py-2 text-decoration-none">
                    <h5 class="text-white">Categories</h5>
                    <small class="text-white">View News Categories</small>
                </a>
                <a href="{{route('news')}}" class="col-sm-8 col-md-7 py-2 text-decoration-none">
                    <h5 class="text-white">News</h5>
                    <small class="text-white">Read All News</small>
                </a>
                <a href="{{route('admin.')}}" class="col-sm-8 col-md-7 py-2 text-decoration-none">
                    <h5 class="text-white">Admin Panel</h5>
                    <small class="text-white">Modify News & Categories</small>
                </a>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a href="{{route('home')}}" class="navbar-brand d-flex align-items-center">
                <h4>GB laravel</h4>
            </a>
            <div class="d-flex align-content-center">
                <div class="nav-item">
                    <a class="nav-link px-3 py-2 text-secondary h-100" href="{{route('user.login')}}">Sign in</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </div>
</header>