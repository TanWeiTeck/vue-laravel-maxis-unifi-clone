@extends('.user.maxis.layouts.master')

@section('content')
    @include('user.maxis.partials.hero')

    {{-- Apply Form --}}

    <form action="{{ route('apply') }}" method="POST" class="flex flex-col justify-center p-4 md:px-10">
        @csrf

        <div class="flex space-x-4">
            <div class="flex w-full flex-col">
                <label class="mt-4 text-xl font-bold text-blue-900">MaxisONE Home Fibre Package (required)*</label>
                <select class="rounded-lg border px-3 py-2" type="text" name="package_id">
                    @foreach ($TelcoPackages as $package)
                        <option value="{{ $package['package_id'] }}">Maxis Home Fibre {{ $package['internet_speed'] }} -
                            RM{{ $package['price'] }}</option>
                    @endforeach
                </select>
                <label class="mt-4 text-xl font-bold text-blue-900">Contact Details (required)*</label>

                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='name' placeholder="Your Name"
                    value="{{ old('name') }}">
                <input class="mb-2 rounded-lg border px-3 py-2" type="email" name='email' placeholder="Your Email"
                    value="{{ old('email') }}">
                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='location' placeholder="Location"
                    value="{{ old('location') }}">
                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='contact' placeholder="Contact Number"
                    value="{{ old('contact') }}">
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
            <label class="mt-4 text-xl font-bold text-blue-900">Message (optional)</label>
            <textarea class="h-[150px] w-full rounded-lg border px-3 py-2" name="message" value="{{ old('message') }}"></textarea>
        </div>

        <button
            class="mt-3 rounded-md bg-[#40c706] px-7 py-2 font-extrabold text-white duration-300 hover:scale-95 hover:bg-blue-400 hover:text-black">SUMMIT</button>
    </form>

@stop
