<div id="getoffer" class="flex w-full justify-between">
    <div class="hidden flex-grow basis-1 border md:block">
        <img class="h-full w-full object-cover"
            src="https://d30itml3t0pwpf.cloudfront.net/api/v3/medias/15464046/image/opt/1600x1599%3E/1623723997-ccd7e2f8"
            alt="couple-looking-at-laptop">
    </div>
    <div class="flex flex-grow basis-1 flex-col items-center justify-center py-2 px-4">
        <div class="my-4 flex flex-col items-end justify-end">
            <img class="my-2 h-12"
                src="https://d30itml3t0pwpf.cloudfront.net/api/v3/medias/15347435/image/opt/original/1615199123-1d813592"
                alt="tm-logo">
            <h1 class='text-2xl'>Rugi Tak Cuba!</h1>
            <h1 class='text-2xl'>30 Days Free UNIFI Home</h1>
            <p class="text-right text-sm">Submit your interest and let our consultant contact you</p>
        </div>
        <form class="flex flex-col items-center" action="{{ route('apply') }}" method="POST">
            @csrf
            <input class=hidden name="type" value="get_offer">
            <input class=hidden name="service_provider" value="unifi">
            <div class="flex flex-col md:flex-row">
                <div class="flex flex-col text-xs">
                    <input class='my-1 w-80 rounded-md border p-2 shadow-inner' type="text" name="name"
                        placeholder="Full Name" value="{{ old('name') }}">
                    <input class='my-1 w-80 rounded-md border p-2 shadow-inner' type="text" name="contact"
                        placeholder="Phone Number" value="{{ old('contact') }}">
                    <input class='my-1 w-80 rounded-md border p-2 shadow-inner' type="email" name="email"
                        placeholder="Email" value="{{ old('email') }}">
                    <input class='my-1 w-80 rounded-md border p-2 shadow-inner' type="text" name="address1"
                        placeholder="Address line 1" value="{{ old('address1') }}">
                    <input class='my-1 w-80 rounded-md border p-2 shadow-inner' type="text" name="address2"
                        placeholder="Address line 2" value="{{ old('address2') }}">
                    <div class="flex w-80 justify-between">
                        <input class='my-1 rounded-md border p-2 shadow-inner' type="text" name="postcode"
                            placeholder="Postcode" value="{{ old('postcode') }}">
                        <input class='my-1 rounded-md border p-2 shadow-inner' type="text" name="city"
                            placeholder="City" value="{{ old('city') }}">
                    </div>
                </div>

                <div class="flex flex-col justify-end p-2 align-text-bottom text-xs">
                    <p class="my-2 font-bold">I am interested in</p>
                    <div>
                        <input class='my-1' type="radio" name="product_category" id="type1" value='unifihome' checked>
                        <label class='my-1' for="type1">Unifi Home</label><br>
                        <input class='my-1' type="radio" name="product_category" id="type2" value='unifibiz'>
                        <label class='my-1' for="type2">Unifi Biz</label><br>
                        <input class='my-1' type="radio" name="product_category" id="type3" value='unifilite'>
                        <label class='my-1' for="type3">Unifi Lite</label>
                    </div>
                </div>
            </div>
            <div class="w-full">
                @if ($errors->any())
                    <div class="mb-2 w-full border border-red-400 bg-red-100 p-1 text-xs text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <button type="submit"
                class="m-3 w-fit rounded-full bg-orange-500 py-3 px-10 text-xl text-white shadow-lg hover:bg-orange-700">
                GET THE OFFER NOW</button>
        </form>
    </div>
</div>
