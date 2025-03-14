<aside class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary h-100" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <span class="fs-5">{{ config('app.name') }}</span>
    </a>
    <hr class="my-2">
    <ul class="nav nav-pills flex-column mb-auto">
        <x-sidebar-link href="/" :current-page="request()->is('/')">Home</x-sidebar-link>
        @if (Auth::check() && Auth::user()->type === 'admin')
            <x-sidebar-link href="/packages" :current-page="request()->is('packages')">📦Packages</x-sidebar-link>
            <x-sidebar-link href="/package_users" :current-page="request()->is('package_users')"> 📅Subscriptions</x-sidebar-link>
            <x-sidebar-link href="/forms" :current-page="request()->is('forms')">Forms</x-sidebar-link>
        @endif

        @if (Auth::check() && Auth::user()->type === 'gym_owner')
            <x-sidebar-link href="/period" :current-page="request()->is('period')">Period</x-sidebar-link>
            <x-sidebar-link href="/services" :current-page="request()->is('services*')">Services</x-sidebar-link>
        @endif

        @if (Auth::check() && Auth::user()->type === 'store_owner')
            <x-sidebar-link href="/products" :current-page="request()->is('products*')">Products</x-sidebar-link>
            <x-sidebar-link href="/services" :current-page="request()->is('services*')">Services</x-sidebar-link>
        @endif

        @if (Auth::check() && Auth::user()->type === 'customer')
            <x-sidebar-link href="/welcome" :current-page="request()->is('/welcome')">Home</x-sidebar-link>
        @endif
    </ul>
    <hr class="my-2">
    <button class="btn btn-primary" id="theme" aria-label="Toggle theme">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon">
            <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
        </svg>
    </button>
    <hr class="my-2">
    @auth
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="{{ Str::title(Auth::user()->name) }}" width="32" height="32" class="rounded-circle me-2">
                <strong>{{ Str::title(Auth::user()->name) }}</strong>
            </a>
            <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <form method="POST" action="{{ route('logout') }}" class="text-center">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </ul>
        </div>
    @endauth

    @guest
        <div class="text-center">
            <x-buttons.primary :url="route('register.create')">Register</x-buttons.primary>
            <x-buttons.primary :url="route('login.create')">Login</x-buttons.primary>
        </div>
    @endguest
</aside>