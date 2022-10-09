<header class="fixed z-30 bottom-0 w-full bg-white border-t-2 border-cyan lg:static lg:border-0">
    <nav class="relative container mx-auto p-6">
        <ul class="flex items-center justify-between">
            <li class="flex items-center space-x-20">
                <a href="/"><img src="{{ asset('images/logo.svg') }}" alt="Shortly logo"></a>
                <ul class="hidden items-center space-x-8 font-bold lg:flex">
                    <li><a href="#" class="text-grayishViolet hover:text-veryDarkViolet duration-200">Features</a>
                    </li>
                    <li><a href="#" class="text-grayishViolet hover:text-veryDarkViolet duration-200">Pricing</a>
                    </li>
                    <li><a href="#"
                            class="text-grayishViolet hover:text-veryDarkViolet duration-200">Resources</a></li>
                </ul>
            </li>
            <ul class="hidden items-center space-x-6 font-bold text-grayishViolet lg:flex">
                @if (Route::has('login'))
                    @auth
                        <li>
                            <a href="{{ url('/dashboard') }}"
                                class="text-grayishViolet hover:text-veryDarkViolet duration-200">Dashboard</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ route('login') }}"
                                class="text-grayishViolet hover:text-veryDarkViolet duration-200">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}"
                                    class="px-8 py-4 font-bold text-white bg-cyan rounded-full duration-200 hover:opacity-70">Sign
                                    up</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
            <button id="menuButton" class="block lg:hidden focus:outline-none" type="button">
                <svg id="openIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    strokeWidth="1.5" stroke="currentColor" class="w-7 h-7 hidden">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </ul>

        <div id="menuList"
            class="absolute p-6 rounded-lg hidden lg:hidden bg-darkViolet left-6 right-6 bottom-20 mb-[3px]">
            <div class="flex flex-col items-center justify-center w-full space-y-6 font-bold text-white rounded-sm">
                <a href="#" class="w-full text-center">Features</a>
                <a href="#" class="w-full text-center">Pricing</a>
                <a href="#" class="w-full text-center">Resources</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="w-full pt-6 border-t border-gray-400 text-center">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="w-full pt-6 border-t border-gray-400 text-center">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="w-full text-center px-8 py-4 font-bold text-white bg-cyan rounded-full duration-200 hover:bg-cyanLight">Sign
                                up</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>
</header>
