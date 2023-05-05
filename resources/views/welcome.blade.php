<x-public-layout>
    <section class="text-gray-700 body-font">

        <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Perisai Diri
                    <br class="hidden lg:inline-block">Kabupaten Bandung Barat
                </h1>
                <p class="mb-8 leading-relaxed">Pandai Silat Tanpa Cedera</p>
                <div class="flex justify-center gap-3">
                    <x-primary-button>Daftar Sekarang!</x-primary-button>
                    <x-secondary-button>Pelajari Lebih Lanjut</x-secondary-button>
                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">

                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{asset('img/hero.jpg')}}"
                                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                 alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{asset('img/hero2.jpg')}}"
                                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                 alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{asset('img/hero3.jpg')}}"
                                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                 alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{asset('img/hero4.jpg')}}"
                                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                 alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{asset('img/hero.jpg')}}"
                                 class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                 alt="...">
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button"
                            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M15 19l-7-7 7-7">
                                </path>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round"
                                                                          stroke-width="2"
                                                                          d="M9 5l7 7-7 7"></path></svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>
        </div>
    </section>
    <section class="text-gray-700 body-font border-t border-gray-200">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Pengurus Kita</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.
                </p>
            </div>
            <div class="flex flex-wrap -m-2">
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                             class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                             src="https://dummyimage.com/80x80/edf2f7/a5afbd">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Holden Caulfield</h2>
                            <p class="text-gray-500">UI Designer</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                             class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                             src="https://dummyimage.com/84x84/edf2f7/a5afbd">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Henry Letham</h2>
                            <p class="text-gray-500">CTO</p>
                        </div>
                    </div>
                </div>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
                        <img alt="team"
                             class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                             src="https://dummyimage.com/88x88/edf2f7/a5afbd">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">Oskar Blinde</h2>
                            <p class="text-gray-500">Founder</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="flex items-center justify-center py-20 bg-white min-w-screen border-t border-gray-200">
        <div class="px-16 bg-white">
            <div class="container flex flex-col items-start mx-auto lg:items-center">
                <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider text-purple-500 uppercase lg:justify-center lg:items-center">
                    Don't just take our word for it</p>
                <h2 class="relative flex items-start justify-start w-full max-w-3xl text-5xl font-bold lg:justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                         class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block"
                         viewBox="0 0 975.036 975.036">
                        <path
                            d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                        </path>
                    </svg>
                    See what others are saying
                </h2>
                <div class="block w-full h-0.5 max-w-lg mt-6 bg-purple-100 rounded-full"></div>

                <div class="items-center justify-center w-full mt-12 mb-4 lg:flex">
                    <div class="flex flex-col items-start justify-start w-full h-auto mb-12 lg:w-1/3 lg:mb-0">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1700&amp;q=80"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">John Doe</h4>
                                <p class="text-gray-600">CEO of Something</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"This is a no-brainer if you want to take your
                            business to the next level. If you are looking for the ultimate toolset, this is it!"
                        </blockquote>
                    </div>
                    <div
                        class="flex flex-col items-start justify-start w-full h-auto px-0 mx-0 mb-12 border-l border-r border-transparent lg:w-1/3 lg:mb-0 lg:px-8 lg:mx-8 lg:border-gray-200">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2547&amp;q=80"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">Jane Doe</h4>
                                <p class="text-gray-600">CTO of Business</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"Thanks for creating this service. My life is so
                            much
                            easier.
                            Thanks for making such a great product."
                        </blockquote>
                    </div>
                    <div class="flex flex-col items-start justify-start w-full h-auto lg:w-1/3">
                        <div class="flex items-center justify-center">
                            <div class="w-16 h-16 mr-4 overflow-hidden bg-gray-200 rounded-full">
                                <img
                                    src="https://images.unsplash.com/photo-1545167622-3a6ac756afa4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1256&amp;q=80"
                                    class="object-cover w-full h-full">
                            </div>
                            <div class="flex flex-col items-start justify-center">
                                <h4 class="font-bold text-gray-800">John Smith</h4>
                                <p class="text-gray-600">Creator of Stuff</p>
                            </div>
                        </div>
                        <blockquote class="mt-8 text-lg text-gray-500">"Packed with awesome content and exactly what I
                            was
                            looking
                            for. I would highly recommend this to anyone."
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-public-layout>
