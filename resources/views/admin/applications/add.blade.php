@extends('admin.layouts.master')

@section('content')
    <div class="sm:py-12">
        <div class="mx-auto max-w-7xl sm:px-3 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">


                <h1 class="py-2 text-center text-3xl font-bold text-blue-900">
                    Add New Application
                </h1>

                {{-- Apply Form --}}
                <form action="{{ route('applications.doCreate') }}" method="POST" class="flex flex-col justify-center p-4">
                    @csrf
                    <input class=hidden name="type" value="application">
                    <div class="flex space-x-4">
                        <div class="flex w-full flex-col">
                            <div class="flex w-full flex-col justify-between md:flex-row">
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Name</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='name'
                                        placeholder="name" value="{{ old('name') }}">
                                </div>
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Email</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='email'
                                        placeholder="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="flex w-full flex-col justify-between md:flex-row">
                                <div class="flex w-full flex-col justify-between sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Address</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='address1'
                                        placeholder="Address line 1" value="{{ old('address1') }}">
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='address2'
                                        placeholder="Address line 2" value="{{ old('address2') }}">
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='postcode'
                                        placeholder="Postcode" value="{{ old('postcode') }}">
                                    <input class="rounded-lg border px-3 py-2" type="text" name='city' placeholder="City"
                                        value="{{ old('city') }}">
                                </div>
                                <div class="w-full">
                                    <div class="flex w-full flex-col sm:px-4">
                                        <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Contact</label>
                                        <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='contact'
                                            placeholder="contact" value="{{ old('contact') }}">
                                    </div>
                                    <div class="flex w-full flex-col sm:px-4">
                                        <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Provider</label>
                                        <select class="rounded-lg border px-3 py-2" type="text" name="service_provider">
                                            @foreach ($Providers as $provider)
                                                <option value="{{ $provider }}"
                                                    @if ($provider == old('service_provider')) selected='selected' @endif>
                                                    {{ $provider }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex w-full flex-col sm:px-4">
                                        <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Package</label>
                                        <select class="rounded-lg border px-3 py-2" type="text" name="package_id">
                                            @foreach ($Packages as $package)
                                                <option value="{{ $package['package_id'] }}"
                                                    @if ($package['package_id'] == old('package_id')) selected='selected' @endif>
                                                    {{ $package['package_id'] }} - Home Fibre
                                                    {{ $package['internet_speed'] }} -
                                                    RM{{ $package['price'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-full flex-col sm:px-4">
                                <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Remark</label>
                                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='remark'
                                    placeholder="remark" value="{{ old('remark') }}">
                            </div>
                        </div>
                    </div>
                    {{-- error message --}}
                    <div class="flex flex-col items-end justify-end sm:px-4">
                        <div class="w-full">
                            @if ($errors->any())
                                <div class="w-full border border-red-400 bg-red-100 p-1 text-xs text-red-600">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                        {{-- end error message --}}
                        <button
                            class="mt-3 rounded-md bg-[#40c706] px-7 py-2 font-extrabold text-white duration-300 hover:scale-95 hover:bg-blue-400 hover:text-black">ADD
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
