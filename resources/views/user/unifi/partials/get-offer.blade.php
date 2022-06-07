<div id="getoffer" class="flex w-full justify-between">
    <div class="hidden flex-grow basis-1 md:block">
        <img src="https://d30itml3t0pwpf.cloudfront.net/api/v3/medias/15464046/image/opt/1600x1599%3E/1623723997-ccd7e2f8"
            alt="couple-looking-at-laptop">
    </div>
    <div class="flex flex-grow basis-1 flex-col items-center justify-center p-4">
        <div class="my-4 flex flex-col items-end justify-end">
            <img class="my-5 h-16"
                src="https://d30itml3t0pwpf.cloudfront.net/api/v3/medias/15347435/image/opt/original/1615199123-1d813592"
                alt="tm-logo">
            <h1 class='text-3xl'>Rugi Tak Cuba!</h1>
            <h1 class='text-3xl'>30 Days Free UNIFI Home</h1>
            <p class="text-right">Submit your interest and let out consultant contact you</p>
        </div>
        <form class="flex flex-col items-center" action="{{ route('unifi.getoffer.doCreate') }}" method="POST">
            @csrf
            <div class="flex flex-col md:flex-row">
                <div class="flex flex-col text-sm">
                    <input class='my-2 w-80 rounded-md border p-2 shadow-inner' type="text" name="name"
                        placeholder="Full Name">
                    <input class='my-2 w-80 rounded-md border p-2 shadow-inner' type="text" name="contact"
                        placeholder="Phone Number">
                    <input class='my-2 w-80 rounded-md border p-2 shadow-inner' type="email" name="email"
                        placeholder="Email">
                    <input class='my-2 w-80 rounded-md border p-2 shadow-inner' type="text" name="address"
                        placeholder="Full Address">
                </div>

                <div class="flex flex-col justify-end p-5 align-text-bottom text-xs">
                    <p class="my-2 font-bold">I am interested in</p>
                    <div>
                        <input class='my-1' type="radio" name="packagetype" id="type1" value='home'>
                        <label class='my-1' for="type1">Unifi Home</label><br>
                        <input class='my-1' type="radio" name="packagetype" id="type2" value='biz'>
                        <label class='my-1' for="type2">Unifi Biz</label><br>
                        <input class='my-1' type="radio" name="packagetype" id="type3" value='lite'>
                        <label class='my-1' for="type3">Unifi Lite</label>
                    </div>
                </div>
            </div>
            <button
                class="m-5 w-fit rounded-full bg-orange-500 py-4 px-10 text-xl text-white shadow-lg hover:bg-orange-700">GET
                THE OFFER
                NOW</button>
        </form>
    </div>
</div>
