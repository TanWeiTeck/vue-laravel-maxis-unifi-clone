<div class="flex h-20 items-center justify-between p-4">

    <a class="flex h-full items-end object-contain" href="{{ route('home') }}">
        <h1 class="bg-gradient-to-r from-green-500 to-orange-500 bg-clip-text text-5xl font-bold text-transparent">TELCO
        </h1>
    </a>
    @auth
        <a class='rounded border px-3 py-1 text-sm text-gray-600 hover:border-black hover:bg-gray-200 hover:text-black'
            href="{{ route('logout') }}">logout</a>
    @endauth
</div>
