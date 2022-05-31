@component('admin.components.presentation-box', ['label' => 'Recent Application'])
    @slot('slot')
        <table class="min-w-full">
            <thead class="border-b">
                <tr>
                    <th scope="col" class="px-4 py-4 text-left text-lg font-bold text-blue-500">
                        Name
                    </th>
                    <th scope="col" class="px-4 py-4 text-left text-lg font-bold text-blue-500">
                        Contact
                    </th>
                    <th scope="col" class="px-4 py-4 text-left text-lg font-bold text-blue-500">
                        Location
                    </th>
                    <th scope="col" class="px-4 py-4 text-left text-lg font-bold text-blue-500">
                        Package
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->reverse()->slice(0, 5) as $data)
                    <tr class="border-b text-xs">
                        <td class="whitespace-nowrap px-4 py-2 font-light text-gray-900">
                            {{ $data['name'] }}
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 font-light text-gray-900">
                            {{ $data['contact'] }}
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 font-light text-gray-900">
                            {{ $data['location'] }}
                        </td>
                        <td class="whitespace-nowrap px-4 py-2 font-light text-gray-900">
                            {{ $data['package_id'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-3 text-xs">
            <a href='/applicationlist'>
                @include('admin.components.primary-button', [
                    'label' => 'Show Full Application List',
                ])
            </a>
        </div>
    @endslot
@endcomponent
