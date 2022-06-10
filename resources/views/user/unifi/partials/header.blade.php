@if (Session::has('success'))
    <div class="w-full border border-blue-400 bg-blue-100 px-1 py-2 text-center text-xs text-blue-600">
        {{ Session::get('success') }}
    </div>
@endif
<div class="flex h-20 items-center justify-between px-6 shadow-lg">
    <a class="h-full object-contain" href="{{ route('unifihome') }}">
        <img class='h-full object-contain p-4'
            src="https://home.unifi.com.my/themes/custom/unifi/assets/svg/unifi-logo.svg" alt="unifi_logo">
    </a>
    <div class="hidden h-full items-center text-sm text-gray-700 lg:flex">
        <a class='{{ request()->is('unifi') ? 'text-[#D03109]' : '' }} flex h-full items-center p-6 duration-300 hover:scale-125'
            href="{{ route('unifihome') }}">Home</a>
        <a class='flex h-full items-center p-6 duration-300 hover:scale-125'
            href="{{ route('unifihome') }}/#homefibre">UNIFI Home Fibre</a>
        <a class='flex h-full items-center p-6 duration-300 hover:scale-125'
            href="{{ route('unifihome') }}/#getoffer">Get Offer Now</a>
    </div>
</div>
