<div id="coverage" class="p-4 md:px-10">
    <h1 class="py-4 text-center text-3xl font-bold text-blue-900">
        Check Your Coverage
    </h1>
    <form action="{{ route('coverage.doCreate') }}" method="POST" class="flex flex-col justify-center">
        @csrf

        <select class="hidden" type="text" name="package">
            <option value="CheckCoverage">-</option>
        </select>
        <div class="flex flex-col sm:flex-row sm:space-x-4">
            <div class="flex w-full flex-col">
                <label class="mt-4 text-xl font-bold text-blue-900">Name</label>
                <input class="rounded-lg border px-3 py-2" type="text" name='name' placeholder="Your name">
                <label class="mt-4 text-xl font-bold text-blue-900">Contact Number</label>
                <input class="rounded-lg border px-3 py-2" type="text" name='contact' placeholder="Your contact number">
            </div>
            <div class="flex w-full flex-col">
                <label class="mt-4 text-xl font-bold text-blue-900">Email</label>
                <input class="rounded-lg border px-3 py-2" type="email" name='email' placeholder="Your email">
                <label class="mt-4 text-xl font-bold text-blue-900">Location</label>
                <input class="rounded-lg border px-3 py-2" type="text" name='location' placeholder="Location">
            </div>
        </div>
        <div class="mb-2 flex flex-col">
            <label class="mt-4 text-xl font-bold text-blue-900">Message</label>
            <textarea class="mb-2 h-[150px] w-full rounded-lg border px-3 py-2" name='message' placeholder="message"></textarea>
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

        {{-- end error message --}}
        @include('user.components.primary-button', ['label' => 'SUBMIT'])
    </form>
</div>
