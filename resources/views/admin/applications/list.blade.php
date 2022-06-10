@extends('admin.layouts.master')

@section('content')
    <div class="m-auto p-6">
        <div class="md-2 items-end px-2 lg:flex">
            <h3 class="flex-auto text-2xl">Application List</h3>
            <a class="text-sm hover:text-blue-700" href="{{ route('applications.create') }}">+ Add New Application</a>
        </div>
        <div class="overflow-x-scroll overflow-y-scroll rounded-xl bg-gray-50">
            @include('admin.components.filter')
            <table class="w-full">
                <thead class="border-b">
                    <tr>
                        <th class="w-44"></th>
                        <th scope="col" class="px-2 py-4 text-left text-sm font-medium text-gray-900">
                            Status
                        </th>
                        <th scope="col" class="px-2 py-4 text-left text-sm font-medium text-gray-900">
                            Remark
                        </th>
                        <th scope="col" class="px-2 py-4 text-left text-sm font-medium text-gray-900">
                            ID
                        </th>
                        <th scope="col" class="px-2 py-4 text-left text-sm font-medium text-gray-900">
                            Created At
                        </th>
                        <th scope="col" class="px-2 py-4 text-left text-sm font-medium text-gray-900">
                            Type
                        </th>
                        <th scope="col" class="px-2 py-4 text-left text-sm font-medium text-gray-900">
                            Name
                        </th>
                        <th scope="col" class="px-2 py-4 text-left text-sm font-medium text-gray-900">
                            Contact
                        </th>
                        <th scope="col" class="px-2 py-4 text-left text-sm font-medium text-gray-900">
                            Package ID
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Applications->reverse() as $application)
                        <tr class="border-b">
                            <td class="flex w-44 flex-row items-center justify-center px-2 py-2 text-xs text-gray-900">
                                <a href="{{ route('applications.doDelete', ['id' => $application['id']]) }}"
                                    name="delete">
                                    <button
                                        class="mx-1 rounded-lg border border-red-400 bg-white py-1 px-3 font-bold hover:bg-red-600 hover:text-gray-100">Delete</button>
                                </a>
                                <modal-blur :label="'Details'"
                                    :styleclass="'mx-1 rounded-lg border border-green-400 bg-white py-1 px-3 font-bold hover:bg-green-400 hover:text-gray-100'">
                                    @include('admin.components.application-details', [$application])
                                </modal-blur>
                            </td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm font-light text-gray-900" valign='top'>
                                {{ $application['status'] }}</td>
                            <td class="min-w-[180px] max-w-xs whitespace-normal px-2 py-2 text-sm font-light text-gray-900"
                                valign='top'>
                                {{ $application['remark'] }}
                            </td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm font-medium text-gray-900" valign='top'>
                                {{ $application['id'] }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm font-light text-gray-900" valign='top'>
                                {{ $application['created_at'] }}</td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm font-light text-gray-900" valign='top'>
                                {{ $application['type'] }}
                            </td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm font-light text-gray-900" valign='top'>
                                {{ $application['name'] }}
                            </td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm font-light text-gray-900" valign='top'>
                                {{ $application['contact'] }}
                            </td>
                            <td class="whitespace-nowrap px-2 py-2 text-sm font-light text-gray-900" valign='top'>
                                {{ $application['package_id'] }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
