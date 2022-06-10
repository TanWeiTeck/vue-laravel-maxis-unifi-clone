@extends('admin.layouts.master')

@section('content')
    <div class="sm:py-12">
        <div class="mx-auto max-w-7xl sm:px-3 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <h1 class="py-2 text-center text-3xl font-bold text-blue-900">
                    Edit Package
                </h1>

                <form action="{{ route('packages.doUpdate', ['id' => $data['id']]) }}" method="POST"
                    class="flex flex-col justify-center p-4">
                    @csrf

                    <input hidden name="id" value="{{ $data->id }}">

                    <div class="flex space-x-4">
                        <div class="flex w-full flex-col">
                            <div class="flex w-full flex-col justify-between md:flex-row">
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Service Provider</label>
                                    <select class="rounded-lg border px-3 py-2" type="text" name="service_provider">
                                        @foreach ($providers as $key => $value)
                                            <option value="{{ $key }}"
                                                @if ($key == $data['service_provider']) selected="selected" @endif>
                                                {{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Package ID</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='package_id'
                                        placeholder="eg:(mx300149)" value="{{ $data['package_id'] }}">
                                </div>
                            </div>

                            <div class="flex w-full flex-col justify-between md:flex-row">
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Internet Speed</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='internet_speed'
                                        placeholder="internet speed" value="{{ $data['internet_speed'] }}">
                                </div>
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Price (RM)</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='price'
                                        placeholder="price" value="{{ $data['price'] }}">
                                </div>
                            </div>

                            <div class="flex w-full flex-col justify-between md:flex-row">
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Discount (RM)</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='discount'
                                        placeholder="discount" value="{{ $data['discount'] }}">

                                </div>
                                <div class="flex w-full flex-col sm:px-4">
                                    <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Discounted Price
                                        (RM)</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='discounted_price'
                                        placeholder="discounted price" value="{{ $data['discounted_price'] }}">
                                </div>
                            </div>
                            <div class="flex w-full flex-col sm:px-4">
                                <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">Description</label>
                                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='description'
                                    placeholder="description" value="{{ $data['description'] }}">
                            </div>

                            <div class="flex w-full flex-col sm:px-4">
                                <label class="mt-2 text-xl font-bold text-blue-900 md:mt-3">is Active?</label>
                                <select class="mb-2 rounded-lg border px-3 py-2" type="text" name="is_active">
                                    <option value="1" @if ('1' == $data['is_active']) selected="selected" @endif>Yes
                                    </option>
                                    <option value="0" @if ('0' == $data['is_active']) selected="selected" @endif>No
                                    </option>
                                </select>
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
