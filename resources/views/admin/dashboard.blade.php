@extends('admin.layouts.master')

@section('content')
    <div class="mx-auto grid min-w-full max-w-7xl md:grid-cols-2">
        <div class="flex-1">
            <div class="grid grid-cols-1 gap-4 border py-6 sm:px-6 md:grid-cols-2 lg:grid-cols-3 lg:px-8">

                @include('admin.components.status-card', [
                    ($label = 'Application'),
                    ($title = 'Maxis'),
                    ($data = $Applications['maxis']),
                    ($icon =
                        'https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-applicants-recruitment-agency-flaticons-lineal-color-flat-icons-3.png'),
                    ($link = route('applications.list')),
                ])
                @include('admin.components.status-card', [
                    ($label = 'Application'),
                    ($title = 'Unifi'),
                    ($data = $Applications['unifi']),
                    ($icon =
                        'https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-applicants-recruitment-agency-flaticons-lineal-color-flat-icons-3.png'),
                    ($link = route('applications.list')),
                ])
                @include('admin.components.status-card', [
                    ($label = 'Application'),
                    ($title = 'Other'),
                    ($data = $Applications['other']),
                    ($icon =
                        'https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/000000/external-applicants-recruitment-agency-flaticons-lineal-color-flat-icons-3.png'),
                    ($link = route('applications.list')),
                ])
                @include('admin.components.status-card', [
                    ($label = 'Telco Pakages'),
                    ($title = 'Maxis'),
                    ($data = $Packages['maxis']),
                    ($icon =
                        'https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-packages-logistics-and-delivery-itim2101-blue-itim2101.png'),
                    ($link = route('packages.list')),
                ])
                @include('admin.components.status-card', [
                    ($label = 'Telco Pakages'),
                    ($title = 'Unifi'),
                    ($data = $Packages['unifi']),
                    ($icon =
                        'https://img.icons8.com/external-itim2101-blue-itim2101/64/000000/external-packages-logistics-and-delivery-itim2101-blue-itim2101.png'),
                    ($link = route('packages.list')),
                ])
            </div>

            <div class="border">
                @component('admin.components.presentation-box', ['label' => 'Maxis Application by Package'])
                    @slot('slot')
                        <doughnut-chart class="flex h-64 w-full items-center justify-center bg-gray-100"
                            :data="{{ $Applications['maxis'] }}" :packages="{{ $Packages['maxis'] }}" />
                    @endslot
                @endcomponent
                @component('admin.components.presentation-box', ['label' => 'Unifi Application by Package'])
                    @slot('slot')
                        <doughnut-chart class="flex h-64 w-full items-center justify-center bg-gray-100"
                            :data="{{ $Applications['unifi'] }}" :packages="{{ $Packages['unifi'] }}" />
                    @endslot
                @endcomponent
            </div>
            <div class="border">
                @include('admin.components.recent-list', [($data = $Applications['all'])])
            </div>
        </div>
        <div class="flex-1 border">
            @component('admin.components.presentation-box', ['label' => 'Monthly Application '])
                @slot('slot')
                    <line-chart class="flex h-64 w-full items-center justify-center" :label="['all', 'maxis', 'unifi']"
                        :color="['#000000', '#40c706', '#F97316', ]"
                        :data="[{{ $Applications['allByMonth'] }}, {{ $Applications['maxisByMonth'] }},
                            {{ $Applications['unifiByMonth'] }}
                        ]" />
                @endslot
            @endcomponent
        </div>
    </div>
@stop
