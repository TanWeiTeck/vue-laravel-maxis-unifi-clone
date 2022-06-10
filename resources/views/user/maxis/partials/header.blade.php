@if (Session::has('success'))
    <div class="w-full border border-blue-400 bg-blue-100 px-1 py-2 text-center text-xs text-blue-600">
        {{ Session::get('success') }}
    </div>
@endif
<div class="flex h-20 items-center justify-between p-4 text-xs xl:text-base">
    <a class="h-full object-contain" href="{{ route('maxishome') }}">
        <img class="h-full object-contain"
            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/maxis_logo-1.jpg"
            alt="maxislogo" /></a>

    <div class="hidden font-bold text-blue-900 lg:block">
        <a class="{{ request()->is('/') ? 'text-[#40c706]' : '' }} border-gray-800 px-2 py-3 hover:text-[#40c706]"
            href="{{ route('maxishome') }}">HOME</a>
        <a class="{{ request()->is('maxisapply') ? 'text-[#40c706]' : '' }} border-gray-800 px-2 py-3 hover:text-[#40c706]"
            href="{{ route('maxisapply') }}">APPLY NOW</a>
        <a class="border-gray-800 px-2 py-3 hover:text-[#40c706]" href="{{ route('maxishome') }}/#fibreplan">MAXIS
            FIBRE
            PLANS</a>
        <a class="border-gray-800 px-2 py-3 hover:text-[#40c706]" href="{{ route('maxishome') }}/#coverage">COVERAGE
            CHECK</a>
        <a class="border-gray-800 px-2 py-3 text-white" href="tel:0123367xxxx">
            @include('user.components.primary-button', ['label' => '012-3367xxxx'])
        </a>
        <a class="border-gray-800 px-2 py-3 text-white" href="tel:0123367xxxx">
            @include('user.components.primary-button', ['label' => 'TECHNICAL:123'])
        </a>
    </div>

    <div class="lg:hidden">
        <side-menu />
    </div>

</div>
