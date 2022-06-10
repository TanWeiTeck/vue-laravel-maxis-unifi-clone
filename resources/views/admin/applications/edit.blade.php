@extends('admin.layouts.master')

@section('content')
    <div class="sm:py-12">
        <div class="mx-auto max-w-7xl sm:px-3 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">


                <h1 class="py-2 text-center text-3xl font-bold text-blue-900">
                    Update - #{{ $data['id'] }}
                </h1>

                {{-- Apply Form --}}

                <form action="{{ route('applications.doUpdate', ['id' => $data['id']]) }}" method="POST"
                    class="flex flex-col justify-center p-4">
                    @csrf

                    <input hidden name="id" value="{{ $data->id }}">
                    <input hidden name="type" value="{{ $data->type }}">

                    <div class="flex space-x-4">
                        <div class="flex w-full flex-col">
                            <div class="flex w-full flex-col justify-between md:flex-row">
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Name</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='name' placeholder=""
                                        value="{{ $data['name'] }}">

                                </div>
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Email</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='email' placeholder=""
                                        value="{{ $data['email'] }}">

                                </div>
                            </div>

                            <div class="flex w-full flex-col justify-between md:flex-row">
                                <div class="flex w-full flex-col justify-between sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Address</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='address1'
                                        placeholder="Address line 1" value="{{ $data['address1'] }}">
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='address2'
                                        placeholder="Address line 2" value="{{ $data['address2'] }}">
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='postcode'
                                        placeholder="Postcode" value="{{ $data['postcode'] }}">
                                    <input class="rounded-lg border px-3 py-2" type="text" name='city' placeholder="City"
                                        value="{{ $data['city'] }}">

                                </div>


                                <div class="w-full">
                                    <div class="flex w-full flex-col sm:px-4">
                                        <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Contact</label>
                                        <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='contact'
                                            placeholder="" value="{{ $data['contact'] }}">
                                    </div>
                                    <div class="flex w-full flex-col sm:px-4">
                                        <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Provider</label>
                                        <select class="rounded-lg border px-3 py-2" type="text" name="service_provider">
                                            @foreach ($Providers as $provider)
                                                <option value="{{ $provider }}"
                                                    @if ($provider == $data['service_provider']) selected='selected' @endif>
                                                    {{ $provider }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex w-full flex-col sm:px-4">
                                        <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Package</label>
                                        <select class="rounded-lg border px-3 py-2" type="text" name="package_id">
                                            @foreach ($packages as $package)
                                                <option value="{{ $package['package_id'] }}"
                                                    @if ($package['package_id'] == $data['package_id']) selected='selected' @endif>
                                                    {{ $package['package_id'] }} - Maxis Home Fibre
                                                    {{ $package['internet_speed'] }} -
                                                    RM{{ $package['price'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="flex w-full flex-col justify-between md:flex-row">

                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Message</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='message'
                                        placeholder="" value="{{ $data['message'] }}">
                                </div>
                            </div>
                            <div class="flex w-full flex-col justify-between md:flex-row">
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Status</label>
                                    <select class="rounded-lg border px-3 py-2" type="text" name="status">
                                        @foreach ($status as $key => $value)
                                            <option value="{{ $key }}"
                                                @if ($key == $data['status']) selected="selected" @endif>
                                                {{ $value }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Remark</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='remark'
                                        placeholder="remark" value="{{ $data['remark'] }}">
                                </div>
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

                        <button type="submit" name="update"
                            class="mt-3 rounded-md bg-[#40c706] px-7 py-2 font-extrabold text-white duration-300 hover:scale-95 hover:bg-blue-400 hover:text-black">UPDATE
                        </button>
                    </div>
                </form>
            </div>


        </div>
    </div>
@stop
