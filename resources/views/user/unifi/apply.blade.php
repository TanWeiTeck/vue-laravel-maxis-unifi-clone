@extends('user.unifi.layouts.master')

@section('content')
    @include('user.unifi.partials.hero')

    {{-- Apply Form --}}

    <form action="{{ route('apply') }}" method="POST" class="flex flex-col justify-center p-4 md:px-10">
        @csrf
        <input class=hidden name="type" value="application">
        <input class=hidden name="service_provider" value="unifi">
        <div class="flex space-x-4">
            <div class="flex w-full flex-col">
                <label class="mt-4 text-xl font-bold text-orange-500">Unifi Home Fibre Package (required)*</label>
                <select class="rounded-lg border px-3 py-2" type="text" name="package_id">
                    @foreach ($TelcoPackages as $package)
                        <option value="{{ $package['package_id'] }}">Unifi Home Fibre {{ $package['internet_speed'] }} -
                            RM{{ $package['price'] }}</option>
                    @endforeach
                </select>
                <label class="mt-4 text-xl font-bold text-orange-500">Contact Details (required)*</label>

                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='name' placeholder="Your Name"
                    value="{{ old('name') }}">
                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='contact' placeholder="Contact Number"
                    value="{{ old('contact') }}">
                <input class="mb-2 rounded-lg border px-3 py-2" type="email" name='email' placeholder="Your Email"
                    value="{{ old('email') }}">
                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='address1' placeholder="Address line 1"
                    value="{{ old('address1') }}">
                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='address2' placeholder="Address line 2"
                    value="{{ old('address2') }}">
                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='postcode' placeholder="Postcode"
                    value="{{ old('postcode') }}">
                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='city' placeholder="City"
                    value="{{ old('city') }}">
            </div>
        </div>
        {{-- error message --}}
        @if ($errors->any())
            <div class="w-full border border-red-400 bg-red-100 p-1 text-xs text-red-600">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- end error message --}}
        <div class="flex flex-col">
            <label class="mt-4 text-xl font-bold text-orange-500">Message (optional)</label>
            <textarea class="h-[150px] w-full rounded-lg border px-3 py-2" name="message" value="{{ old('message') }}"></textarea>
        </div>

        <button
            class="mt-3 rounded-md bg-orange-500 px-7 py-2 font-extrabold text-white duration-300 hover:bg-orange-700 hover:text-black">SUMMIT</button>
    </form>

@stop
