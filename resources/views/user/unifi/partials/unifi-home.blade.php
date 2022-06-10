<div id='homefibre' class="bg-orange-500 text-sm font-semibold text-white md:flex">
    <div class="flex flex-grow flex-col items-center justify-center p-4 md:items-end md:p-10">
        <div class="w-64">
            <h3 class="text-2xl">Unifi Home</h3>
            <p>Endless entertainment - now yours to enjoy. </p>
            <p>With Unifi TV and unlimited internet, enjoy even more of the options 24/7 in the comfort of your own
                home.</p>
        </div>
    </div>
    <div class="flex-grow">
        <img src="https://d30itml3t0pwpf.cloudfront.net/api/v3/medias/15464071/image/opt/1600x724%3E/1623726182-5581f431"
            alt="family-lookingat-console">
    </div>
</div>
<div class="flex flex-col items-center justify-center p-10 text-gray-700">
    <h1 class="m-auto text-3xl font-semibold tracking-tighter text-orange-500">Our Packages</h1>
    <h1 class="m-auto text-center text-3xl font-semibold tracking-tighter text-orange-500">FREE 1-Month Subscription</h1>
    <div class="flex snap-x snap-mandatory flex-wrap justify-center pt-4">
        @foreach ($Packages as $package)
            <div
                class="my-4 mx-3 w-[240px] overflow-hidden rounded-2xl bg-stone-200 shadow-xl duration-300 hover:scale-110">
                <div class="bg-orange-500 p-3 text-center font-bold text-gray-50">
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
                <a href="{{ route('unifiapply') }}" class="flex justify-center bg-orange-500 p-6">
                    <button action class="rounded-full bg-blue-800 px-5 py-2 text-xs text-white">GET IT NOW</button>
                </a>
            </div>
        @endforeach
    </div>
</div>
