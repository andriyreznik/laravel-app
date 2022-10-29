<x-app-layout>
    <x-slot name="header">
        <div class="relative inline-flex items-center px-4 py-2">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ $user->name }}
            </h2>
        </div>

        {{-- <a href="{{ route('users.index') }}"><button type="button">Back to users</button></a> --}}
    </x-slot>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <a href="{{ route('users.index') }}"><button type="button" class="underline">
                            <- Back to users</button></a>

                    <table class="min-w-full">

                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <b>ID</b>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$user->id}}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><b>NAME</b></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$user->name}}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><b>EMAIL</b></td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{$user->email}}
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><b>CREATED AT</b>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$user->created_at}}</td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><b>UPDATED AT</b>
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$user->updated_at}}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
