<x-guest-layout>
    @if (Route::has('login'))
        <div class="fixed top-0 right-0 px-6 py-4">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-0 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-center bg-white border-b border-gray-200">
                    <form action="{{ route('urls.store') }}" method="post">
                        @csrf
                        <input type="text" name="original" id="original">
                        <button type="submit"
                            class="m-2 px-6 py-2 text-white bg-blue-500 hover:bg-blue-600">Shorten!</button>
                        @error('original')
                            <p class="text-red-600">{{ $message }}</p>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
