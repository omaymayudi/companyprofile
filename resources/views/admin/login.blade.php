<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center h-screen bg-gray-100">

    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center">Login to Your Account</h2>
        @error('username')
            <div class="text-red-500 text-center">
                {{ $message }}
            </div>
        @enderror

        <form class="space-y-4" method="post" action="{{ route('login') }}">
            @csrf
            <!-- Email Field -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="username" id="username" name="username" required
                    class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">

            </div>

            <!-- Password Field -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">

            </div>

            {{-- <!-- Remember Me Checkbox -->
            <div class="flex items-center justify-between">
                <label class="inline-flex items-center">
                    <input type="checkbox" class="text-indigo-500 form-checkbox">
                    <span class="ml-2 text-sm text-gray-700">Remember me</span>
                </label>
                <a href="#" class="text-sm text-indigo-500 hover:underline">Forgot password?</a>
            </div> --}}

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="w-full px-4 py-2 font-bold text-white bg-indigo-500 rounded-md hover:bg-indigo-600">
                    Login
                </button>
            </div>
        </form>


    </div>

</body>

</html>
