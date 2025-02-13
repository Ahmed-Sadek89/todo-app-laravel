<header>
    <nav class="bg-gray-800 border-gray-200 px-4 lg:px-6 py-2.5 ">
        <div class="flex justify-between items-center w-full">
            <ul class="flex items-center font-medium  lg:space-x-8 ">
                <li>
                    <a href={{ route('home') }}
                        class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 "
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href={{ route('add-note') }}
                        class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 ">Add
                        a note</a>
                </li>
            </ul>
            <a href="#"
                class="text-white bg-red-500 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5  ">Log
                out</a>

        </div>
    </nav>
</header>
