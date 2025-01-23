<nav class="flex justify-between bg-gray-500 max-lg:flex-col-reverse max-lg:items-center">
    <!--left side-->
    <ul class="flex items-center gap-6 max-lg:w-full max-lg:justify-between max-lg:px-3">
        <li><img src="images/company/logo_white.png" alt="aa" class="w-20 h-20 object-contain"></li>
        <li class="w-[200px] h-full flex justify-center items-center scale-100">
            <form class="max-w-md mx-auto">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">

                    <input type="search" id="default-search"
                        class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search" required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>
                    </button>
                </div>
            </form>

        </li>
        <li class=" max-lg:hidden"><a href="" class="text-blue-400">Contact</a></li>
        <li class="hidden max-lg:flex">
            <button class="flex flex-col items-center text-blue-400 w-20 h-20 justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-list scale-150" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
                </svg>
                Menu
            </button>
        </li>
    </ul>
    <!--right side-->
    <ul class="flex items-center gap-6 max-lg:w-full max-lg:justify-center max-lg:px-3 max-lg:bg-gray-800">
        <li class="max-lg:hidden">
            <a class="text-white flex items-center gap-1" href="tel:778899">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone"
                    viewBox="0 0 16 16">
                    <path
                        d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z" />
                    <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2" />
                </svg>
                0707466666
            </a>
        </li>
        <li class="flex gap-3 h-full justify-center items-center lg:w-[300px] lg:bg-gray-800 max-lg:py-3">
            <span class="w-12 h-12 flex justify-center items-center rounded-full bg-blue-400">
                <img src="images/icons/cart.svg" alt="">
            </span>
            <span class="flex flex-col gap-1">
                <p class="text-lg text-blue-400">0 LKR</p>
                <p class="text-xs text-blue-400">Build Your PC</p>
            </span>
        </li>
    </ul>
    <!--phone num (only on max-lg)-->
    <span class="hidden max-lg:flex py-3 w-full flex justify-center bg-black"><a
            class="text-white flex items-center gap-1 text-xl" href="tel:778899">
            Call Us - 0707466666
        </a></span>
</nav>