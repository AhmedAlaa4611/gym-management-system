<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ config('app.name') }}</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body class="d-flex vh-100">
        <div class="d-flex flex-column flex-grow-1 overflow-y-auto">
            <main class="container mb-auto mt-4">
                <h1 class="mb-4">{{ $heading }}</h1>
                {{ $slot }}
            </main>

            <footer class="bg-body-tertiary border-top mt-4">
                <div class="container py-3">
                    &copy;{{ now()->year }}, Created by <a href="https://www.linkedin.com/in/ahmed-alaa-075b81281" target="_blank">Ahmed Alaa</a>
                </div>
            </footer>
        </div>

        {{-- scripts --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>