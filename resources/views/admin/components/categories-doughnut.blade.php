@component('admin.components.presentation-box', ['label' => 'Application by Package'])
    @slot('slot')
        <doughnut-chart class="flex h-64 w-full items-center justify-center bg-gray-100" :data="{{ $data }}"
            :labels='["30mbps", "100mbps", "300mbps", "500mbps", "800mbps"]' />
    @endslot
@endcomponent
