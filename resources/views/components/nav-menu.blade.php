<nav class="bg-white dark:bg-gray-900 w-full dark:border-gray-600">
    <div class="max-w-screen-2xl mx-auto">            
        <button id="categories" data-dropdown-toggle="dropdown-pet" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-lg font-medium text-center text-white bg-[#5B96A6] rounded-lg hover:bg-[#6CC1D8] focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">
            <i class="fa-solid fa-cart-flatbed-suitcase pr-5"></i>
            Shop By Pets 
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>
        <div id="dropdown-pet" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="categories">
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">All</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dog</button>
                </li>
                <li>
                    <button type="button" class="inline-flex w-full px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Cat</button>
                </li>
            </ul>
        </div>
    </div>
</nav>



    