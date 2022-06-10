<div class="border-0 border-b-2 p-4 pb-2 text-xs sm:flex">
    <form action="{{ route('filter') }}" method="GET">
        @csrf
        <div class="sm:flex sm:space-x-4">
            <div class="py-1">
                <label class="font-bold" for="status">Status:</label>
                <select class='rounded-md border' name="status" value='{{ old('status') }}'>
                    <option value="">All</option>
                    @foreach ($status as $status)
                        <option value="{{ $status }}"
                            @if ($status == $request['status']) selected='selected' @endif>
                            {{ $status }}</option>
                    @endforeach
                </select>
            </div>
            <div class="py-1">
                <label class="font-bold" for="provider">Provider:</label>
                <select class='rounded-md border' name="service_provider">
                    <option value="">All</option>
                    @foreach ($Providers as $provider)
                        <option value="{{ $provider }}"
                            @if ($provider == $request['service_provider']) selected='selected' @endif>
                            {{ $provider }}</option>
                    @endforeach
                </select>
            </div>
            <div class="py-1">
                <label class="font-bold" for="type">Type:</label>
                <select class='rounded-md border' name="type">
                    <option value="">All</option>
                    @foreach ($Types as $type)
                        <option value="{{ $type }}"
                            @if ($type == $request['type']) selected='selected' @endif>
                            {{ $type }}</option>
                    @endforeach
                </select>
            </div>
            <button
                class="my-1 rounded-md border border-green-400 bg-white py-0 px-3 hover:bg-green-400 hover:text-gray-100 sm:mx-1"
                type="submit">FILTER</button>
        </div>
    </form>
    <a href="{{ route('applications.list') }}" class="">
        <button
            class="my-1 rounded-md border border-red-400 bg-white py-0 px-3 hover:bg-red-600 hover:text-gray-100 sm:mx-1">CANCEL</button>
    </a>
</div>
