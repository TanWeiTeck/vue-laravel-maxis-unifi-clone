@extends('admin.layouts.master')

@section('content')

    <div class="mx-auto w-full overflow-hidden py-12 sm:px-6 lg:px-8">
        <div class="mb-2 flex items-center px-2">
            <h3 class="flex-auto text-2xl">Application List</h3>
            <a class="text-sm hover:text-blue-700" href="{{ url('/addapplication') }}">+ Add New Application</a>
        </div>

        <div class="overflow-x-scroll bg-gray-50">
            <table class="">
                <thead class="border-b">
                    <tr>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Remark
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">

                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Created/Updated At
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Contact
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Location
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Package ID
                        </th>
                        <th scope="col" class="px-6 py-4 text-left text-sm font-medium text-gray-900">
                            Message
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($Application->reverse() as $application)
                        <tr class="border-b">
                            <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                {{ $application['id'] }}</td>
                            <form action="/addremark" method='POST'>
                                @csrf
                                <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-900">
                                    <select name="" id="">
                                        <option value="Pending" <?php if ($application['status'] === 'Pending') {
                                            echo 'selected';
                                        } ?>>Pending</option>
                                        <option value="Called" <?php if ($application['status'] === 'Called') {
                                            echo 'selected';
                                        } ?>>Called</option>
                                        <option value="Follow_up" <?php if ($application['status'] === 'Follow_up') {
                                            echo 'selected';
                                        } ?>>Follow Up</option>
                                        <option value="Closed" <?php if ($application['status'] === 'Closed') {
                                            echo 'selected';
                                        } ?>>Closed</option>
                                    </select>
                                </td>
                                <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                    <input type="text" placeholder="add remarks" value="{{ $application['remark'] }}">
                                </td>
                                <td>
                                    <form action="/addremark" method='POST'>
                                        @csrf

                                        <button type="submit" name="update"
                                            class="rounded-lg bg-green-500 py-1 px-4 text-sm font-medium hover:bg-green-800 hover:text-gray-100">save</button>
                                    </form>
                                </td>

                            </form>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $application['updated_at'] }}</td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $application['name'] }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $application['email'] }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $application['contact'] }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $application['location'] }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                {{ $application['package_id'] }}
                            </td>
                            <td
                                class="h-10 min-w-[20rem] overflow-y-hidden break-words px-6 py-2 text-sm font-light text-gray-900">
                                {{ $application['message'] }}
                            </td>
                            <td class="whitespace-nowrap px-6 py-2 text-sm font-light text-gray-900">
                                <a href="{{ 'deleteapplication/' . $application['id'] }}" name="delete">
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
