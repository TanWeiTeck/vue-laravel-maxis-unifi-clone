@extends('admin.layouts.master')

@section('content')

    <div class="my-7 flex-col pb-2 text-sm text-black sm:flex">
        <div class="m-auto flex max-w-md flex-col p-7 sm:border sm:shadow-md">
            <h1 class="py-3 text-center text-3xl">Log in</h1>
            <p class="pb-3 text-center">to continue to <strong class="">Telco Admin Dashboard</strong></p>
            <form action="{{ url('/login') }}" method="post">
                @csrf
                {{-- Email --}}
                <div class="flex flex-col py-2">
                    <label for="email"><strong>Email Address</strong></label>
                    <div class="relative flex items-center">
                        <input
                            class="z-10 w-full border-0 border-b-2 border-gray-200 bg-transparent focus:border focus:border-b-2 focus:ring-0"
                            type="text" name="email" value="{{ old('email') }}" placeholder="email">
                        <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12.14 9.55"
                            class="absolute right-0 z-0 m-1 h-4 w-4">
                            <defs></defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path
                                        d="M0,0V9.55H12.14V0ZM10.44.91,6,4.48,1.69.91ZM.85,8.63V1.37L6,5.59l5.23-4.22V8.63Z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <span class="text-xs text-red-600">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                {{-- Password --}}
                <div class="flex flex-col py-2">
                    <label for="password"><strong>Password</strong></label>
                    <div class="relative flex items-center">
                        <input
                            class="z-10 w-full border-0 border-b-2 border-gray-200 bg-transparent focus:border focus:border-b-2 focus:ring-0"
                            type="password" name="password" placeholder="password">
                        <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11.23 13.69"
                            class="absolute right-0 z-0 m-1 h-4 w-4">
                            <defs></defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path
                                        d="M9.75,5V3.77A4,4,0,0,0,5.61,0,4,4,0,0,0,1.48,3.77V5A2,2,0,0,0,0,6.9v4.81a2,2,0,0,0,2,2H9.25a2,2,0,0,0,2-2V6.9A2,2,0,0,0,9.75,5ZM2.37,3.77A3.08,3.08,0,0,1,5.61.89,3.08,3.08,0,0,1,8.86,3.77V4.92H2.37Zm8,7.94A1.09,1.09,0,0,1,9.25,12.8H2A1.09,1.09,0,0,1,.89,11.71V6.9A1.09,1.09,0,0,1,2,5.81H9.25A1.09,1.09,0,0,1,10.34,6.9Z">
                                    </path>
                                    <path
                                        d="M5.61,6.89A1.19,1.19,0,0,0,4.43,8.08V9.55a1.19,1.19,0,1,0,2.37,0V8.08A1.19,1.19,0,0,0,5.61,6.89Zm.29,2.66a.29.29,0,1,1-.58,0V8.08a.29.29,0,1,1,.58,0Z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </div>

                    <span class="text-xs text-red-600">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                {{-- Remember Me Check Box --}}
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input class="border-gray-400 text-black accent-black focus:ring-0" type="checkbox" name="remember"
                            id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="pl-3" for="remember">
                            Remember me
                        </label>
                    </div>
                    <a class="text-black hover:underline" href="">Forgot password?</a>
                </div>
                {{-- Submit Button --}}
                <div>
                    <button class='my-5 w-full bg-[#40c706] p-2 text-white hover:bg-blue-400 hover:text-black'
                        type="submit">Log In</button>
                </div>
                <p class="pt-4 text-center">Don't have an account? <a class="font-bold" href="register">Register</a>
                </p>
            </form>
        </div>

    </div>

@stop
