@extends('admin.layouts.master')

@section('content')
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white p-5 shadow-xl sm:rounded-lg">


                <h1 class="py-2 text-center text-3xl font-extrabold text-blue-900">
                    Add New Application
                </h1>



                {{-- Apply Form --}}

                <form action="/addapplication" method="POST" class="flex flex-col justify-center p-4">
                    @csrf


                    <div class="flex space-x-4">
                        <div class="flex w-full flex-col">
                            <div class="flex w-full flex-col justify-between md:flex-row">
                                <div class="flex w-full flex-col px-4">
                                    <label class="mt-2 text-xl font-extrabold text-blue-900 md:mt-3">Name</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='name'
                                        placeholder="name" value="{{ old('name') }}">

                                </div>
                                <div class="flex w-full flex-col px-4">
                                    <label class="mt-2 text-xl font-extrabold text-blue-900 md:mt-3">Email</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='email'
                                        placeholder="email" value="{{ old('email') }}">

                                </div>
                            </div>

                            <div class="flex w-full flex-col justify-between md:flex-row">
                                <div class="flex w-full flex-col px-4">
                                    <label class="mt-2 text-xl font-extrabold text-blue-900 md:mt-3">Location</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='location'
                                        placeholder="location" value="{{ old('location') }}">

                                </div>
                                <div class="flex w-full flex-col px-4">
                                    <label class="mt-2 text-xl font-extrabold text-blue-900 md:mt-3">Contact</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='contact'
                                        placeholder="contact" value="{{ old('contact') }}">
                                </div>
                            </div>


                            <div class="flex w-full flex-col justify-between md:flex-row">
                                <div class="flex w-full flex-col px-4">
                                    <label class="mt-2 text-xl font-extrabold text-blue-900 md:mt-3">Package_id</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='package_id'
                                        placeholder="package_id" value="{{ old('package_id') }}">

                                </div>
                                <div class="flex w-full flex-col px-4">
                                    <label class="mt-2 text-xl font-extrabold text-blue-900 md:mt-3">Message</label>
                                    <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='message'
                                        placeholder="message" value="{{ old('message') }}">
                                </div>
                            </div>
                            <div class="flex w-full flex-col px-4">
                                <label class="mt-2 text-xl font-extrabold text-blue-900 md:mt-3">Remark</label>
                                <input class="mb-2 rounded-lg border px-3 py-2" type="text" name='remark'
                                    placeholder="remark" value="{{ old('remark') }}">
                            </div>
                        </div>
                    </div>
                    {{-- error message --}}
                    <div class="flex flex-col items-end justify-end px-4">
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
