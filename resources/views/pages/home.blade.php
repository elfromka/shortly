<x-guest-layout>
    <section id="hero">
        <div class="container flex flex-col-reverse mx-auto p-6 lg:flex-row">
            <div class="flex flex-col space-y-10 mb-32 lg:mt-16 lg:w-1/2">
                <h1 class="text-5xl font-bold text-center lg:text-6xl lg:max-w-md lg:text-left">More than just shorter
                    links
                </h1>
                <p class="text-2xl text-center text-gray-400 lg:max-w-md lg:text-left">Build your brand's recognition and
                    get
                    detailed insights on how your links are performing.</p>
                <div class="mx-auto lg:mx-0">
                    <a href="{{ route('register') }}"
                        class="py-4 px-10 text-2xl font-bold text-white bg-cyan rounded-full duration-200 hover:opacity-70">Get
                        started</a>
                </div>
            </div>
            <div class="mb-24 mx-auto md:w-180 lg:mb-0 lg:w-1/2">
                <img src="{{ asset('images/illustration-working.svg') }}" alt="Person working at desk">
            </div>
        </div>
    </section>
    <section id="shorten" class="relative bg-gray-100">
        <div class="max-w-4xl mx-auto p-6 space-y-6">
            <form action="{{ route('urls.store') }}" method="POST"
                class="relative flex flex-col w-full p-10 -mt-20 space-y-4 bg-darkViolet rounded-lg md:flex-row md:space-y-0 md:space-x-3">
                @csrf
                <input type="text"
                    class="flex-1 p-3 border-2 rounded-lg font-bold placeholder:text-grayishViolet placeholder:font-normal focus:outline-none"
                    name="original" id="original" placeholder="Shorten a link here">
                @error('original')
                    <p class="text-rose-300 absolute top-3">{{ $message }}</p>
                @enderror
                <button
                    class="px-10 py-3 text-white bg-cyan rounded-lg hover:bg-cyanLight duration-200 focus:outline-none md:py-2">Shorten
                    it!</button>
            </form>

            @unless(count($shortUrls) == 0)
                @foreach ($shortUrls as $shortUrl)
                    <ul
                        class="flex flex-col items-center justify-between w-full p-6 space-y-4 bg-white rounded-lg md:flex-row md:space-y-0">
                        <li class="font-bold text-center text-veryDarkViolet md:text-left"><a target="_blank"
                                href="{{ url($shortUrl->original) }}">{{ Str::limit($shortUrl->original, 40) }}</a>
                        </li>
                        <li
                            class="flex flex-col items-center justify-end flex-1 space-x-4 space-y-6 md:flex-row md:space-y-0">
                            <a href="{{ url()->current() }}/{{ $shortUrl->short }}" target="_blank"
                                class="font-bold text-cyan">{{ url()->current() }}/{{ $shortUrl->short }}</a>
                            <button
                                class="py-2 px-8 text-white bg-cyan rounded-lg hover:bg-cyanLight duration-200 focus:outline-none">Copy</button>
                        </li>
                    </ul>
                @endforeach
            @else
                <ul class="flex items-center justify-center w-full p-6 bg-white rounded-lg">
                    <li class="font-bold text-center text-veryDarkViolet md:text-left py-2 px-8">No links were shortened
                        yet...</li>
                </ul>
            @endunless
        </div>
    </section>

    <section id="stats" class="py-24 bg-gray-100">
        <div class="container mx-auto px-3">
            <h2 class="text-4xl mb-6 font-bold text-center">Advanced statistics</h2>
            <p class="max-w-xs mx-auto text-center text-gray-400 md:max-w-md">
                Track how your links are performing across the web with our advanced statistics dashboard.
            </p>
        </div>
    </section>

    <section id="features" class="pb-32 bg-gray-100">
        <div class="relative container flex flex-col items-start px-6 mx-auto md:flex-row md:space-x-7">
            <div class="hidden absolute top-24 left-16 h-3 bg-cyan w-10/12 md:block"></div>
            <div class="absolute w-2 left-1/2 h-full -ml-1 bg-cyan md:hidden"></div>
            <div class="relative flex flex-col p-6 space-y-6 bg-white rounded-lg md:w-1/3">
                <div class="absolute -ml-10 left-1/2 -top-10 md:left-16">
                    <div class="flex items-center justify-center w-20 h-20 p-4 rounded-full bg-veryDarkViolet">
                        <img src="images/icon-brand-recognition.svg" alt="">
                    </div>
                </div>
                <h5 class="pt-6 text-xl font-bold text-center capitalize md:text-left">Brand recognition</h5>
                <p class="text-center text-gray-400 md:text-left">
                    Boost your brand recognition with each click. Generic links don't mean a thing. Branded links help
                    instil confidence in your content.
                </p>
            </div>
            <div class="relative flex flex-col mt-24 p-6 space-y-6 bg-white rounded-lg md:w-1/3 md:mt-8">
                <div class="absolute -ml-10 left-1/2 -top-10 md:left-16">
                    <div class="flex items-center justify-center w-20 h-20 p-4 rounded-full bg-veryDarkViolet">
                        <img src="images/icon-detailed-records.svg" alt="">
                    </div>
                </div>
                <h5 class="pt-6 text-xl font-bold text-center capitalize md:text-left">Detailed records</h5>
                <p class="text-center text-gray-400 md:text-left">
                    Gain insights into who is clicking your links. Knowing when and where people engage with your
                    content
                    helps inform better decisions.
                </p>
            </div>
            <div class="relative flex flex-col mt-24 p-6 space-y-6 bg-white rounded-lg md:w-1/3 md:mt-16">
                <div class="absolute -ml-10 left-1/2 -top-10 md:left-16">
                    <div class="flex items-center justify-center w-20 h-20 p-4 rounded-full bg-veryDarkViolet">
                        <img src="images/icon-fully-customizable.svg" alt="">
                    </div>
                </div>
                <h5 class="pt-6 text-xl font-bold text-center capitalize md:text-left">Fully customizable</h5>
                <p class="text-center text-gray-400 md:text-left">
                    Improve brand awareness and content discoverability through customizable links, supercharging
                    audience
                    engagement.
                </p>
            </div>
        </div>
    </section>

    <section id="cta" class="py-24 bg-darkViolet">
        <div class="flex flex-col p-2 space-y-6">
            <h5 class="mx-auto space-y-10 text-4xl font-bold text-center text-white">Boost your links today</h5>
            <a href="{{ route('register') }}"
                class="px-8 py-4 bg-cyan mx-auto text-white font-bold text-center duration-200 rounded-full hover:bg-cyanLight">Get
                started</a>
        </div>
    </section>
</x-guest-layout>
