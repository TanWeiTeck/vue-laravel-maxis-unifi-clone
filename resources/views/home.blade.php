@extends('layouts.master')

@section('content')
    <div class="flex w-full items-center justify-center">
        <div class="flex w-full flex-col items-center py-14 sm:w-min sm:rounded-md sm:border sm:shadow-md">
            <a class="flex h-24 w-full flex-col items-center justify-center object-contain duration-300 hover:bg-green-200 sm:w-72"
                href="{{ route('maxishome') }}">
                <img class="h-14 object-contain"
                    src="https://iconape.com/wp-content/files/cd/76540/svg/maxis-communications-logo.svg" alt="maxislogo" />
                <p>Maxis Home Page</p>
            </a>
            <a class="flex h-24 w-full flex-col items-center justify-center object-contain duration-300 hover:bg-orange-200 sm:w-72"
                href="{{ route('unifihome') }}">
                <img class='h-12 object-contain'
                    src="https://home.unifi.com.my/themes/custom/unifi/assets/svg/unifi-logo.svg" alt="unifi_logo">
                <p>Unifi Home Page</p>
            </a>
            <a class="flex h-24 w-full flex-col items-center justify-center object-contain duration-300 hover:bg-purple-200 sm:w-72"
                href="{{ route('dashboard') }}">
                <h1 class="bg-gradient-to-r from-green-500 to-orange-500 bg-clip-text text-5xl font-bold text-transparent">
                    TELCO
                </h1>
                <p>Telco Admin Dashboard</p>
            </a>
        </div>
    </div>
@stop
