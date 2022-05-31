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

    <div id="app" class="relative min-h-screen">

        {{-- Header --}}
        <div>
            @include('admin.partials.header')
        </div>
        <div class="flex w-screen">

            <div class="">
                @include('admin.components.dashboard-menu')
            </div>
            <div class="flex-grow overflow-hidden">
                {{-- Main Content --}}
                <div>
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="min-h-[461px] sm:min-h-[221px]"></div>
        {{-- Footer --}}
        <div class="absolute bottom-0 w-full">
            @include('admin.partials.footer')
        </div>
    </div>
    @include('admin.partials.js-variable')
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
