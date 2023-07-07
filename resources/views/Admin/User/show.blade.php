<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-4 sm:p-0">
        <div class="grid grid-cols-1 my-4 xl:grid-cols-2 xl:gap-4">
            <!-- Activity Card -->
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800 xl:mb-0">
                <div class="flex items-center space-x-4 ">
                    <img class="w-12 h-12 rounded-full" src="{{$anggota->foto}}" alt="{{$anggota->name}}">
                    <div class="font-medium dark:text-white">
                        <div>{{$anggota->name}}</div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">Joined in August 2014</div>
                    </div>
                </div>

            </div>
            <!--Carousel widget -->
            <div
                class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm dark:border-gray-700 sm:p-6 dark:bg-gray-800">

                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Latest Activity</h3>
                    <a href="#"
                       class="inline-flex items-center p-2 text-sm font-medium rounded-lg text-primary-700 hover:bg-gray-100 dark:text-primary-500 dark:hover:bg-gray-700">
                        View all
                    </a>
                </div>
                <ol class="relative border-l border-gray-200 dark:border-gray-700">
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-800 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">April 2023
                        </time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Application UI design in
                            Figma</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to over 20+
                            pages
                            including a dashboard layout, charts, kanban board, calendar, and pre-order E-commerce &amp;
                            Marketing pages.</p>
                        <a href="#"
                           class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-primary-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">Learn
                            more
                            <svg class="w-3 h-3 ml-2" fill="currentColor" viewBox="0 0 20 20"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                      d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                      clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-800 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">March 2023
                        </time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI code in
                            Flowbite</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens
                            of
                            web components and interactive elements built on top of Tailwind CSS.</p>
                        <a href="https://flowbite.com/blocks/"
                           class="inline-flex items-center text-xs font-medium hover:underline text-primary-700 sm:text-sm dark:text-primary-500">
                            Go to Flowbite Blocks
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" stroke-width="2"
                                 viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-800 dark:bg-gray-700"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February
                            2023
                        </time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Marketing UI design in
                            Figma</h3>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Get started with dozens of web
                            components and interactive elements built on top of Tailwind CSS.</p>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</x-app-layout>
