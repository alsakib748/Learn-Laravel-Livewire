<div>

    <section class="bg-gray-100 dark:bg-gray-900 py-5">


    <div class="max-w-md mx-auto">

        <div wire:offline.attr='disabled'>

            <div id="alert-border-4"
                class="flex items-center p-4 mb-4 text-yellow-800 border-t-4 border-yellow-300 bg-yellow-50 dark:text-yellow-300 dark:bg-gray-800 dark:border-yellow-800 max-w-md mx-auto"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <div class="ms-3 text-sm font-medium">
                        A simple danger alert with an <a href="#"
                            class="font-semibold underline hover:no-underline">example link</a>. Give it a click if you
                        like.
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-yellow-50 text-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-400 p-1.5 hover:bg-yellow-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-yellow-300 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-border-4" aria-label="Close">
                        <span class="sr-only">Dismiss</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
            </div>

        </div>

    <form  action="" method="post">
        <div class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">

                <div class="mb-5">
                    <label for="search"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Search</label>
                    <input wire:model.live.debounce='search' type="text" id="search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search..." />
                </div>

                <button wire:offline.attr='disabled' wire:click='update' type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>

        </div>
    </form>

        <div wire:offline.remove
            class="p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mt-6">

            @foreach($users as $user)

            <div wire:key='{{ $user->id }}' class="flex flex-row justify-between items-center">
                <div class="">
                    <h4 class="font-bold text-xl">{{ $user->name }}</h4>
                    <p class="text-md">{{ $user->email }}</p>
                </div>
                <div class="">
                    <button
                        class="w-fit py-1 px-3 bg-teal-500 text-white rounded hover:bg-teal-400 focus:ring-2 focus:ring-teal-600">View</button>
                </div>
            </div>

            <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">

            @endforeach

            <div class="my-5">
                <p class="text-sm">{{ $users->links() }}</p>
            </div>

        </div>

    </div>

</section>

</div>
