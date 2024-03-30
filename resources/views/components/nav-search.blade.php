{{-- <div class="max-w-screen-2xl mx-auto my-5 flex justify-between items-center">

    <div>
        <a href="/" class="flex items-center gap-4">
            <img src="{{ asset('image/main-logo.jpg') }}" alt="PetSo Logo" class="h-16 rounded-full">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PetSo</span>
        </a>
    </div>

    <div class="w-[500px]">
        <form>
            <div class="flex">
                <label for="search-dropdown" class="mb-2 text-ml font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
                <button id="search" data-dropdown-toggle="dropdown-search" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-ml font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-full hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                </button>
                <div id="dropdown-search" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-ml text-gray-700 dark:text-gray-200" aria-labelledby="search">
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
                <div class="relative w-full">
                    <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-ml text-gray-900 bg-gray-50 rounded-e-full border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-[#5B96A6] dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Dog Cat..." required />
                    <button type="submit" class="absolute top-0 end-0 py-2.5 px-5 text-ml font-medium h-full text-white bg-[#5B96A6] rounded-e-full border border-[#5B96A6] hover:bg-[#6CC1D8] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
    

    <div class="flex gap-4">
        <a href="#">
            <i class="fa-solid fa-heart text-2xl hover:text-[#6CC1D8]"></i>
        </a>
        <a href="#">
            <i class="fa-solid fa-cart-plus text-2xl hover:text-[#6CC1D8]"></i>
        </a>
        <a href="#">
            <i class="fa-solid fa-user text-2xl hover:text-[#6CC1D8]"></i>
        </a>
    </div>

</div> --}}

<div class="w-[500px]">
    <form>
        <div class="flex">
            <label for="search-dropdown" class="mb-2 text-ml font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
            <button id="search" data-dropdown-toggle="dropdown-search" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-ml font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-full hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600" type="button">All categories <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <div id="dropdown-search" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                <ul class="py-2 text-ml text-gray-700 dark:text-gray-200" aria-labelledby="search">
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
            <div class="relative w-full">
                <input type="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-ml text-gray-900 bg-gray-50 rounded-e-full border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-[#5B96A6] dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search Dog Cat..." required />
                <button type="submit" class="absolute top-0 end-0 py-2.5 px-5 text-ml font-medium h-full text-white bg-[#5B96A6] rounded-e-full border border-[#5B96A6] hover:bg-[#6CC1D8] focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
            </div>
        </div>
    </form>
</div>