<div class="py-6">
    <h1 id="fibreplan" class="py-4 text-center text-3xl font-bold text-blue-900">
        MaxisONE Home Fibre Plans
    </h1>
    <div class="flex max-h-max snap-x snap-mandatory overflow-x-auto md:flex-wrap md:justify-center">
        @foreach ($TelcoPackages as $package)
            <div
                class="my-4 mx-3 flex min-h-[370px] min-w-[20rem] snap-center flex-col overflow-hidden rounded-2xl border-2 border-blue-800 bg-white shadow-md duration-500 hover:border-blue-500 hover:shadow-lg hover:shadow-blue-400 sm:max-w-[20rem] lg:max-w-[24rem]">
                <div class="bg-gray-100 p-5 text-blue-900">
                    <h1 class="text-xl">Maxis Home Fibre</h1>
                    <p class="text-3xl font-bold">{{ $package['internet_speed'] }}</p>
                </div>
                <div class="flex flex-grow flex-col justify-between bg-white px-5 py-3 text-gray-900">
                    <div>
                        <h1 class="font-b text-xl">Recommended For</h1>
                        <ul class="">
                            <li class=""><span class="text-xl font-bold text-blue-800">&#9737;</span>
                                {{ $package['description'] }}</li>
                        </ul>
                        <p class="text-[0.6rem]">* Existing customer who change rate plan is not eligible for free DECT
                            phone.
                        </p>
                        <hr class="my-3 border-2">
                    </div>
                    <div class="flex items-center justify-between">
                        <h1><span class="text-xl font-bold">RM {{ $package['price'] }}</span>/month</h1>
                        <a href="{{ route('maxisapply') }}">
                            <button
                                class="rounded-full bg-[#40c706] px-7 py-2 font-extrabold text-white duration-300 hover:scale-105 hover:bg-blue-400 hover:text-black">Apply
                                Now</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
