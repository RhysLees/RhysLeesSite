<x-guest-layout>
    <section id="hero" class="min-h-screen pt-24 overflow-hidden bg-white dark:bg-zinc-900">
        <div class="px-12 mx-auto max-w-7xl">
            <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
                <h1 class="mb-8 text-4xl font-extrabold leading-none tracking-normal text-gray-900 dark:text-gray-100 md:text-6xl md:tracking-tight">
                    <span>Rhys Lees</span>
                    <br>
                    <span class="block w-full py-2 text-transparent bg-clip-text leading-12 bg-gradient-to-r from-cyan-400 to-purple-500 lg:inline">Full-Stack Web Developer</span>
                </h1>
                <p class="px-0 mb-8 text-lg text-gray-600 dark:text-gray-300 md:text-xl lg:px-24">
                    Start gaining the traction you've always wanted with our next-level management system, crafted to
                    help you run your business.
                </p>
                <div class="mb-4 space-x-0 md:space-x-2 md:mb-8">
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg text-white rounded-md bg-cyan-400 hover:bg-cyan-500 sm:w-auto sm:mb-0">
                        Get Started
                        <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <a href="#features"
                        class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg bg-gray-100 rounded-md hover:bg-gray-200 sm:w-auto sm:mb-0">
                        Learn More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="w-full mx-auto mt-20 text-center md:w-10/12">
                <div class="relative z-0 w-full mt-8">
                    <div class="relative overflow-hidden shadow-2xl">
                        <div class="flex items-center flex-none h-8 px-4 rounded-t-md bg-gradient-to-r from-cyan-400 to-purple-500">
                            <div class="flex space-x-1.5">
                                <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                                <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                                <div class="w-3 h-3 border-2 border-white rounded-full"></div>
                            </div>
                        </div>
                        <img class="block dark:hidden rounded-b-md" width="1920px" height="1080px" src="{{ asset('img/Hero/DesktopDark.png') }}" alt="{{ __('Dark Hero Image') }}">
                        <img class="hidden dark:block rounded-b-md" width="1920px" height="1080px" src="{{ asset('img/Hero/DesktopLight.png') }}" alt="{{ __('Light Hero Image') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="features" class="py-24 bg-gray-50 dark:bg-gray-800">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-xl font-bold tracking-wide text-transparent uppercase bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500">Features</h2>
                <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    A better way to manage your business
                </p>
                <p class="max-w-2xl mt-4 text-gray-600 dark:text-gray-300 md:text-xl lg:mx-auto">
                    Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis
                    in accusamus quisquam.
                </p>
            </div>

            <div class="mt-10">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 text-white rounded-md bg-gradient-to-br from-cyan-400 to-purple-500">
                                <!-- Heroicon name: outline/globe-alt -->
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-semibold leading-6 text-gray-900 dark:text-white">Competitive
                                exchange rates</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-300">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                            suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 text-white rounded-md bg-gradient-to-br from-cyan-400 to-purple-500">
                                <!-- Heroicon name: outline/scale -->
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-semibold leading-6 text-gray-900 dark:text-white">No hidden
                                fees</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-300">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                            suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 text-white rounded-md bg-gradient-to-br from-cyan-400 to-purple-500">
                                <!-- Heroicon name: outline/lightning-bolt -->
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-semibold leading-6 text-gray-900 dark:text-white">Transfers are
                                instant</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-300">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                            suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <div
                                class="absolute flex items-center justify-center w-12 h-12 text-white rounded-md bg-gradient-to-br from-cyan-400 to-purple-500">
                                <!-- Heroicon name: outline/annotation -->
                                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                            <p class="ml-16 text-lg font-semibold leading-6 text-gray-900 dark:text-white">Mobile
                                notifications</p>
                        </dt>
                        <dd class="mt-2 ml-16 text-base text-gray-500 dark:text-gray-300">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis
                            suscipit eaque, iste dolor cupiditate blanditiis ratione.
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>


{{--
    <section id="support" class="py-24 bg-white dark:bg-zinc-900">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-xl font-bold tracking-wide text-transparent uppercase bg-clip-text bg-gradient-to-r from-cyan-400 to-purple-500">Support</h2>
                <p class="mt-2 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-4xl">
                    Types of businesses we currently support
                </p>
                <p class="max-w-2xl mt-4 text-gray-600 dark:text-gray-300 md:text-xl lg:mx-auto">
                    Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis
                    in accusamus quisquam.
                </p>
            </div>

            <div class="grid grid-cols-1 gap-4 mt-10 md:grid-cols-3 lg:grid-cols-4">

                @foreach ($checkouts as $checkout)
                    <div class="group">
                        @if ($checkout['released'])
                            <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-purple-500 rounded-md hover:border-purple-600">
                                <span class="absolute top-0 right-0 px-3 py-1 text-xs tracking-widest text-white bg-cyan-400 rounded-bl-md group-hover:bg-cyan-500">Released</span>
                        @else
                            <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
                                <span class="absolute top-0 right-0 px-3 py-1 text-xs tracking-widest text-gray-700 bg-gray-300 rounded-bl-md dark:text-gray-900">Coming Soon</span>
                        @endif
                            <h2 class="mt-4 mb-1 text-sm font-semibold tracking-widest text-gray-900 uppercase title-font dark:text-white">{{ $checkout['screen_name'] }}</h2>
                            <h1
                                class="flex items-center pb-4 mb-4 text-5xl leading-none text-gray-900 border-b border-gray-200 dark:text-white md:text-3xl">
                                <span>£100</span>
                                <span class="ml-1 text-lg font-normal text-gray-500 dark:text-gray-300 md:text-base">/mo</span>
                                <span class="ml-auto text-lg font-normal text-gray-500 dark:text-gray-300 md:text-sm">ex. vat</span>
                            </h1>

                            @foreach ($checkout['features'] as $feature)
                                @if ($loop->last)
                                    <p class="flex items-center mb-6 text-gray-600 dark:text-gray-300">
                                @else
                                    <p class="flex items-center mb-2 text-gray-600 dark:text-gray-300">
                                @endif
                                    @if ($checkout['released'])
                                        <span
                                            class="inline-flex items-center justify-center flex-shrink-0 w-4 h-4 mr-2 text-white rounded-full bg-cyan-400 group-hover:bg-cyan-500">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center justify-center flex-shrink-0 w-4 h-4 mr-2 text-white bg-gray-400 rounded-full">
                                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                                <path d="M20 6L9 17l-5-5"></path>
                                            </svg>
                                        </span>
                                    @endif
                                    {{ $feature }}
                                </p>
                            @endforeach

                            @if ($checkout['released'])
                                <a href="{{ route('billing') }}"
                                    class="flex items-center w-full px-4 py-2 mt-auto text-white border-0 rounded-md bg-cyan-400 focus:outline-none hover:bg-cyan-500">Get Started
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            @else
                                <button
                                    class="flex items-center w-full px-4 py-2 mt-auto text-gray-500 bg-gray-300 border-0 rounded-md focus:outline-none hover:bg-gray-300">Coming Soon
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                        <path d="M5 12h14M12 5l-7 7l7 7"></path>
                                    </svg>
                                </button>
                            @endif
                            <p class="mt-3 text-xs text-center text-gray-500">{{ $checkout['description'] }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section> --}}

    {{-- <section id="about" class="h-screen bg-gray-100 dark:bg-cyan-400 ">

    </section> --}}
    <section class="bg-gray-50 dark:bg-zinc-900">
        <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl dark:text-gray-100">
                <span class="block">Ready to dive in?</span>
                <span class="block text-transparent bg-gradient-to-r from-cyan-400 to-purple-500 bg-clip-text">Start your free trial today.</span>
            </h2>
            <div class="flex mt-8 lg:mt-0 lg:flex-shrink-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg text-white rounded-md bg-cyan-400 hover:bg-cyan-500 sm:w-auto sm:mb-0">
                        Get Started
                        <svg class="w-4 h-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </div>
                <div class="inline-flex ml-3 rounded-md shadow">
                    <a href="#features"
                        class="inline-flex items-center justify-center w-full px-6 py-3 mb-2 text-lg bg-gray-100 rounded-md sm:w-auto sm:mb-0">
                        Learn More
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
