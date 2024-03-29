<x-layout>
    <x-nav></x-nav>
    <main class="max-w-lg mx-auto mt-10 border border-gray-200 bg-gray-100 p-6 rounded-xl">
        <h1 class="text-centder font-bold text-xl">Login</h1>
        <form method="POST" action="/gallery/admin" class="mt-10">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 upperase font-bold text-xs text-gray-700" for="email">
                    Email
                </label>

                <input class="border border-gray-400 p-2 w-full" type="email" name="email" id="email"
                    value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block mb-2 upperase font-bold text-xs text-gray-700" for="password">
                    Password
                </label>

                <input class="border border-gray-400 p-2 w-full" type="password" name="password" id="password"
                    required>
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button type="submit" class="bg-blue-400 text-white rounded px-4 hover:bg-blue-500">
                    Login
                </button>
            </div>
    </main>
    </form>
</x-layout>
