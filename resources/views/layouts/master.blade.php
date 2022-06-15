<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body class="antialiased">

    <div id="app" class="relative m-auto min-h-screen max-w-screen-2xl">

        {{-- Header --}}
        <div>
            @include('partials.header')
        </div>
        <div class="">
            <div class="">
                {{-- Main Content --}}
                <div class="">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="min-h-[65px] sm:min-h-[49px]"></div>
        {{-- Footer --}}
        <div class="absolute bottom-0 w-full">
            @include('admin.partials.footer')
        </div>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
