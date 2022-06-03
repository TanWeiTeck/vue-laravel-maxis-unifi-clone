<div class="flex flex-col space-y-3 md:w-96">
    <div>
        <h1 class="text-lg font-bold">#{{ $application['id'] }}</h1>
    </div>
    <div>
        <h1 class="text-sm font-bold">Applicant Name:</h1>
        <p>{{ $application['name'] }}</p>
    </div>
    <div>
        <h1 class="text-sm font-bold">Applicant email:</h1>
        <p>{{ $application['email'] }}</p>
    </div>
    <div>
        <h1 class="text-sm font-bold">Applicant location:</h1>
        <p>{{ $application['location'] }}</p>
    </div>
    <div>
        <h1 class="text-sm font-bold">Selected Package's ID:</h1>
        <p>{{ $application['package_id'] }}</p>
    </div>
    <div>
        <h1 class="text-sm font-bold">Message:</h1>
        <p>{{ $application['message'] }}</p>
    </div>
    <div>
        <h1 class="text-sm font-bold">Status:</h1>
        <p>{{ $application['status'] }}</p>
    </div>
    <div>
        <h1 class="text-sm font-bold">Remark:</h1>
        <p>{{ $application['remark'] }}</p>
    </div>
    <div class="flex justify-between">
        <div>
            <h1 class="text-sm font-bold">Created At:</h1>
            <p>{{ $application['created_at'] }}</p>
        </div>
        <div>
            <h1 class="text-sm font-bold">Latest Update:</h1>
            <p>{{ $application['updated_at'] }}</p>
        </div>
    </div>

    <div>
        <a href="{{ route('applications.edit', ['id' => $application['id']]) }}" name="edit">
            <button
                class="rounded-lg border border-green-400 bg-white py-1 px-3 font-bold hover:bg-green-400 hover:text-gray-100">Edit</button>
        </a>
    </div>
</div>
