<div id="coverage" class="p-4">
    <h1 class="py-4 text-center text-3xl font-extrabold text-blue-900">
        Check Your Coverage
    </h1>
    <form action="/submit" method="POST" class="flex flex-col justify-center">
        @csrf

        <select class="hidden" type="text" name="package">
            <option value="CheckCoverage">-</option>
        </select>
        <div class="flex flex-col sm:flex-row sm:space-x-4">
            <div class="flex w-full flex-col">
                <label class="mt-4 text-xl font-extrabold text-blue-900">Name</label>
                <input class="rounded-lg border px-3 py-2" type="text" name='name' placeholder="Your name" required>
                <label class="mt-4 text-xl font-extrabold text-blue-900">Contact Number</label>
                <input class="rounded-lg border px-3 py-2" type="text" name='contact' placeholder="Your contact number"
                    required>
            </div>
            <div class="flex w-full flex-col">
                <label class="mt-4 text-xl font-extrabold text-blue-900">Email</label>
                <input class="rounded-lg border px-3 py-2" type="email" name='email' placeholder="Your email" required>
                <label class="mt-4 text-xl font-extrabold text-blue-900">Location</label>
                <input class="rounded-lg border px-3 py-2" type="text" name='location' placeholder="Location" required>
            </div>
        </div>
        <div class="mb-2 flex flex-col">
            <label class="mt-4 text-xl font-extrabold text-blue-900">Message</label>
            <textarea class="mb-2 h-[150px] w-full rounded-lg border px-3 py-2" name='message' placeholder="message"></textarea>
        </div>

        @include('user.components.primary-button', ['label' => 'SUBMIT'])
    </form>
</div>
