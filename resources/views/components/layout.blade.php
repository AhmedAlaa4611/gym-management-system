<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/customer.css') }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    </head>
    <body class="d-flex vh-100">
        @if (Auth::check() && in_array(Auth::user()->type, ['admin', 'gym_owner', 'store_owner']))
            @include('components.sidebar')
        @endif

        <div class="d-flex flex-column flex-grow-1 overflow-y-auto">
            @auth
                @include('components.nav')
            @endauth

            @if (Auth::check() && Auth::user()->type === 'customer')
                <main class="mb-auto bg-black">
                    {{ $slot }}
                </main>
            @else
                <main class="container mb-auto mt-4">
                    <h1 class="mb-4">{{ $heading }}</h1>
                    {{ $slot }}
                </main>
            @endif

            @auth
                @include('components.footer')
            @endauth
        </div>

        {{-- scripts --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/theme.js') }}"></script>
        <script src="{{ asset('assets/js/sidebar.js') }}"></script>
        <script src="{{ asset('assets/js/calc.js') }}"></script>
    </body>
</html>