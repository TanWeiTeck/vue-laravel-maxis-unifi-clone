<div class="flex h-20 items-center justify-between p-4">
    <a class="h-full object-contain" href="{{ url('/') }}">
        <img class="h-full object-contain"
            src="https://www.maxis-fibreinternet.com.my/wp-content/uploads/2021/10/maxis_logo-1.jpg"
            alt="maxislogo" /></a>

    <div class="hidden font-bold text-blue-900 lg:block">
        <a class="{{ request()->is('/') ? 'text-[#40c706]' : '' }} border-gray-800 px-2 py-3 hover:text-[#40c706]"
            href="{{ url('/') }}">HOME</a>
        <a class="{{ request()->is('apply') ? 'text-[#40c706]' : '' }} border-gray-800 px-2 py-3 hover:text-[#40c706]"
            href="{{ url('/apply') }}">APPLY NOW</a>
        <a class="border-gray-800 px-2 py-3 hover:text-[#40c706]" href="{{ url('/#fibreplan') }}">MAXIS FIBRE
            PLANS</a>
        <a class="border-gray-800 px-2 py-3 hover:text-[#40c706]" href="{{ url('/#coverage') }}">COVERAGE
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
