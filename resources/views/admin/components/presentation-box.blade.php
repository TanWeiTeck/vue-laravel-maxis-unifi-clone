<div class="grid flex-1 grid-cols-1 gap-4 border py-6 sm:px-6 lg:px-8">
    <div
        class="flex flex-col overflow-hidden bg-white p-3 shadow-xl duration-200 hover:shadow-md hover:shadow-blue-300 sm:rounded-lg">
        <div class="mb-2 flex items-center space-x-2">
            <h1 class="text-xl font-bold text-gray-600">{{ $label }}</h1>
        </div>
        {{ $slot }}
    </div>
</div>
