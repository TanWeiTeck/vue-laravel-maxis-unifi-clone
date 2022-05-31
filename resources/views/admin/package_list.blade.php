@extends('admin.layouts.master')

@section('content')

    <div class="mx-auto max-w-7xl overflow-hidden py-12 sm:px-6 lg:px-8">
        <div class="mb-2 flex items-center px-2">
            <h3 class="flex-auto text-2xl">Package</h3>
            <a class="text-sm hover:text-blue-700" href="{{ url('/addpackage') }}">+ Add New Package</a>
        </div>

        <div class="max-w-full overflow-x-scroll bg-gray-50">
            <table class="min-w-full">
                <thead class="border-b">
                    <tr>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Package ID
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Service Provider
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Speed
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Price(RM)
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Discount(RM)
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Discounted Price(RM)
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Description
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Telco_Package as $package)
                        <tr class="border-b">
                            <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                {{ $package['package_id'] }}</td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $package['service_provider'] }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $package['internet_speed'] }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $package['price'] }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $package['discount'] }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $package['discounted_price'] }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $package['description'] }}
                            </td>
                            <td class="px-6 py-2 pr-1 text-sm font-light text-gray-900">
                                <a href="{{ 'edit/' . $package['id'] }}" name="edit">
                                    <button
                                        class="rounded-lg bg-green-500 py-1 px-4 font-bold hover:bg-green-800 hover:text-gray-100">Edit</button>
                                </a>
                            </td>
                            <td class="whitespace-nowrap px-1 py-4 text-sm font-light text-gray-900">
                                <a href="{{ 'deletepackage/' . $package['id'] }}" name="delete">

                                    <button
                                        class="rounded-lg bg-red-400 py-1 px-3 font-bold hover:bg-red-800 hover:text-gray-100">Delete</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>




@stop
