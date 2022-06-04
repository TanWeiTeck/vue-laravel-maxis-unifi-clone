<div class="flex flex-col items-center justify-center p-10 text-gray-700">
    <h1 class="text-4xl font-bold tracking-tighter">Unifi Home Fibre</h1>
    <div class="flex snap-x snap-mandatory flex-wrap justify-center">
        @foreach ($Packages as $package)
            <div
                class="my-4 mx-3 w-[240px] overflow-hidden rounded-2xl bg-stone-200 shadow-xl duration-300 hover:scale-110">
                <div class="bg-orange-400 p-3 text-center font-bold text-gray-50">
                    <h3>UNIFI</h3>
                    <h2 class="text-2xl">{{ $package['internet_speed'] }}Mbps</h2>
                </div>
                <div class="flex flex-col items-center justify-center py-6">
                    <h3 class="flex font-bold">RM
                        <span class="text-5xl">{{ $package['price'] }}</span>
                    </h3>
                    <p class="p-3 text-center text-[10px]">UNLIMITED INTERNET</p>
                    <hr class="border-1 w-full border-white">
                    <p class="p-3 text-center text-[10px]">{{ $package['description'] }}</p>
                </div>
                <div class="flex justify-center bg-orange-400 p-6">
                    <button class="rounded-full bg-blue-800 px-5 py-2 text-xs text-white">GET IT NOW</button>
                </div>
            </div>
        @endforeach
    </div>
</div>
