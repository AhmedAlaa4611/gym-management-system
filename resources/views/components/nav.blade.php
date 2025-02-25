@if (Auth::check() && Auth::user()->type === 'customer')
    <nav class="navbar navbar-customer navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <a class="navbar-brand-customer" href="/welcome">
                <img src="storage/images/logo.png" alt="Logo" />
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-2">
                    <li class="nav-item">
                        <a class="nav-link" href="/welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#feature">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gym">Gym</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn" href="/cart">
                            <i class="bi bi-cart-fill"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="btn" href="/fav">
                            <i class="bi bi-house-heart-fill"></i>
                        </a>
                    </li>
                </ul>
                <div class="dropdown me-5">
                    <a href="#" class="nav-item d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="{{ Str::title(Auth::user()->name) }}" width="35" height="35" class="rounded-circle border border-danger me-2">
                        <strong>{{ Str::title(Auth::user()->name) }}</strong>
                    </a>
                    <ul class="dropdown-menu text-small shadow" >
                        <li><a class="dropdown-item" href="#">New project...</a></li>
                        <li><a class="dropdown-item" href="#">Settings</a></li>
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <form method="POST" action="{{ route('logout') }}" class="text-center">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm text-light">Logout</button>
                        </form>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@else
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
        <div class="container">
            <a class="navbar-brand" href="/">{{ config('app.name') }}</a>
            <button class="btn btn-primary" type="button" aria-label="Toggle sidebar" id="sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
@endif