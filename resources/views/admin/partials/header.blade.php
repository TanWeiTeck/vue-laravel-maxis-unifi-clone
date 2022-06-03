<div class="flex h-20 items-center justify-between p-4">

    <a class="flex h-full items-end object-contain" href="{{ url('/dashboard') }}">

        <img class="h-full object-contain"
            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/maxis_logo-1.jpg" alt="maxislogo" />
        <p class="text-xs text-green-900">Admin Tool</p>
    </a>
    @auth
        <a class='rounded border px-3 py-1 text-sm text-gray-600 hover:border-black hover:bg-gray-200 hover:text-black'
            href="{{ route('logout') }}">logout</a>
    @endauth
</div>
