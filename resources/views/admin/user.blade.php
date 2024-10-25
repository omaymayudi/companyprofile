<x-app-layout title="User Setting">
    {{-- @dump($errors) --}}
    <form class="" action="/user/update/{{ $user->id }}" method="post">
        @method('PUT')
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 font-medium text-gray-900 dark:text-white">Your Name</label>
            <input type="name" id="name" name="name" value="{{ $user->name }}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 rounded-lg  block w-full p-2 " />
            @error('name')
                <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="username" class="block mb-2 font-medium text-gray-900 dark:text-white">Your Username</label>
            <input type="username" id="username" name="username" value="{{ $user->username }}"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 rounded-lg  block w-full p-2 " />
            @error('username')
                <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="password" class="block mb-2 font-medium text-gray-900 dark:text-white">Your Password</label>
            <input type="password" id="password" name="password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 rounded-lg  block w-full p-2 " />
            @error('password')
                <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-5">
            <label for="repeat_password" class="block mb-2 font-medium text-gray-900 dark:text-white">Repeat
                Your Password</label>
            <input type="password" id="repeat_password" name="repeat_password"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 rounded-lg  block w-full p-2 " />
            @error('repeat_password')
                <p class="text-red-500 mt-1">{{ $message }}</p>
            @enderror
        </div>


        <button type="submit" class="btn-indigo">Save</button>
    </form>

</x-app-layout>
