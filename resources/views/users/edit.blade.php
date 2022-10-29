<x-app-layout>
    <x-slot name="header">
        <div class="relative inline-flex items-center px-4 py-2">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit User
            </h2>
        </div>
    </x-slot>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <a href="{{ route('users.index') }}"><button type="button" class="underline">
                            <- Back to users</button></a>

                    <br>
                    <br>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <div class="bg-red-100 rounded-lg py-5 px-6 mb-4 text-base text-red-700 mb-3" role="alert">
                                <li>{{ $error }}</li>
                            </div>
                            @endforeach

                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 xl:w-96">
                            <strong></strong>
                            <label for="name" class="form-label inline-block mb-2 text-gray-700 text-xl">Name:</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="
                            form-control
                            block
                            w-full
                            px-4
                            py-2
                            text-xl
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            " id="name" placeholder="Name">
                        </div>

                        <div class="mb-3 xl:w-96">
                            <strong></strong>
                            <label for="email" class="form-label inline-block mb-2 text-gray-700 text-xl">Email:</label>
                            <input type="text" name="email" value="{{ $user->email }}" class="
                            form-control
                            block
                            w-full
                            px-4
                            py-2
                            text-xl
                            font-normal
                            text-gray-700
                            bg-white bg-clip-padding
                            border border-solid border-gray-300
                            rounded
                            transition
                            ease-in-out
                            m-0
                            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            " id="email" placeholder="Email">
                        </div>

                        <hr>
                        <br>

                        <button type="submit" class="
                        inline-block
                        px-6
                        py-2.5
                        bg-white
                        text-gray-700
                        border
                        border-gray-300
                        font-medium
                        text-xs
                        leading-tight
                        uppercase
                        rounded
                        shadow-md
                        hover:bg-gray-300
                        hover:shadow-lg
                        focus:bg-gray-300
                        focus:shadow-lg
                        focus:outline-none
                        focus:ring-0
                        active:bg-gray-400
                        active:shadow-lg
                        transition
                        duration-150
                        ease-in-out
                        ">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
