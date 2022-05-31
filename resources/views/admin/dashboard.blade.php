@extends('admin.layouts.master')

@section('content')
    <div class="mx-auto grid min-w-full max-w-7xl md:grid-cols-2">
        <div class="flex-1">
            <div class="grid grid-cols-1 gap-4 border py-6 sm:px-6 md:grid-cols-2 lg:grid-cols-3 lg:px-8">

                @include('admin.components.status-card', [
                    ($label = 'Application'),
                    ($data = $Application),
                    ($icon =
                        'https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-applicants-recruitment-agency-flaticons-lineal-color-flat-icons-3.png'),
                    ($link = '/applicationlist'),
                ])
                @include('admin.components.status-card', [
                    ($label = 'Telco Pakages'),
                    ($data = $Telco_Package),
                    ($icon =
                        'https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-packages-logistics-and-delivery-itim2101-blue-itim2101.png'),
                    ($link = '{{ route('packages.list') }}'),
                ])
            </div>

            <div>
                @include('admin.components.categories-doughnut', [($data = $Application)])
            </div>
            <div>
                @include('admin.components.recent-list', [($data = $Application)])
            </div>
        </div>
        <div class="flex-1">

            @component('admin.components.presentation-box', ['label' => 'Application'])
                @slot('slot')
                    <line-chart class="flex h-64 w-full items-center justify-center" :data="{{ $data }}" />
                @endslot
            @endcomponent

            @component('admin.components.presentation-box', ['label' => 'Application'])
                @slot('slot')
                    <line-chart class="flex h-64 w-full items-center justify-center" :data="{{ $data }}" />
                @endslot
            @endcomponent

            {{-- @include('components.dashboard.graphcard', [
                    ($label = 'Application'),
                    ($data = $Application),
                    ($icon =
                        'https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-applicants-recruitment-agency-flaticons-lineal-color-flat-icons-3.png'),
                ])
                @include('components.dashboard.graphcard', [
                    ($label = 'Telco Pakages'),
                    ($data = $Telco_Package),
                    ($icon =
                        'https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-packages-logistics-and-delivery-itim2101-blue-itim2101.png'),
                ])

                @include('components.dashboard.graphcard', [
                    ($label = 'Application'),
                    ($data = $Application),
                    ($icon =
                        'https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-applicants-recruitment-agency-flaticons-lineal-color-flat-icons-3.png'),
                ]) --}}
        </div>
    </div>
@stop
