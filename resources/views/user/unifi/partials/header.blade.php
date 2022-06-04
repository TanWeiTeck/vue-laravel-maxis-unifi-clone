<div class="flex h-20 items-center justify-between px-6 shadow-lg">
    <a class="h-full object-contain" href="{{ route('home') }}">
        <img class='h-full object-contain p-4'
            src="https://home.unifi.com.my/themes/custom/unifi/assets/svg/unifi-logo.svg" alt="unifi_logo">
    </a>
    <div class="hidden h-full items-center text-sm text-gray-700 lg:flex">
        <a class='{{ request()->is('unifi') ? 'text-[#D03109]' : '' }} flex h-full items-center p-6 duration-300 hover:scale-125'
            href="{{ route('home') }}">Home</a>
        <a class='flex h-full items-center p-6 duration-300 hover:scale-125'
            href="{{ route('home') }}/#homefibre">UNIFI Home Fibre</a>
        <a class='flex h-full items-center p-6 duration-300 hover:scale-125'
            href="{{ route('home') }}/#businessfibre">UNIFI Business Fibre</a>
        <a class='flex h-full items-center p-6 duration-300 hover:scale-125'
            href="{{ route('home') }}/#checkcoverage">Check Unifi Coverage</a>
    </div>
</div>
