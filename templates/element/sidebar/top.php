
<div class="flex flex-col w-0 flex-1 overflow-hidden">
    <div class="relative z-10 flex-shrink-0 flex h-16 bg-white shadow">
        <button @click.stop="sidebarOpen = true" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:bg-gray-100 focus:text-gray-600 md:hidden">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </button>
        <div class="flex-1 px-4 flex justify-between">
            <div class="flex-1 flex">
                <div class="w-full flex md:ml-0">
                    <label for="search_field" class="sr-only">Search</label>
                    <div class="relative w-full text-gray-400 focus-within:text-gray-600">
                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                            </svg>
                        </div>
                        <input id="search_field" class="block w-full h-full pl-8 pr-3 py-2 rounded-md text-gray-900 placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 sm:text-sm" placeholder="Search" />
                    </div>
                </div>
            </div>
            <div class="ml-4 flex items-center md:ml-6">
                <button class="p-1 text-gray-400 rounded-full hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:shadow-outline focus:text-gray-500">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
                <button
                    class="
                        p-1 text-gray-400 rounded-full w-8
                        hover:bg-gray-100 hover:text-gray-500
                        focus:outline-none focus:shadow-outline"
                    v-on:click="darkLightModeUpdate">
                    <span :class="{'hidden': isDark}" title="Dark mode" class="text-kored">
                        <i class="fa fa-moon-o"></i>
                    </span>
                    <span :class="{'hidden': !isDark}" title="Light mode" class="text-kored">
                        <i class="fa fa-sun-o"></i>
                    </span>
                </button>
                <div class="ml-3 relative">
                    <div>
                        <button v-on:click="toggleUserOptions" class="max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:shadow-outline">
                            <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                        </button>
                    </div>
                    <div
                        :class="{ hidden: !showUserOptions }"
                        class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                        <div class="py-1 rounded-md bg-white shadow-xs">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150">Your Profile</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150">Settings</a>
                            <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <main class="flex-1 relative z-0 overflow-y-auto py-6 focus:outline-none" tabindex="0" x-data x-init="$el.focus()">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
            <!-- Replace with your content -->
            <div class="py-4">
                <div class="border-4 border-dashed border-gray-200 rounded-lg h-96"></div>
            </div>
            <!-- /End replace -->
        </div>
    </main>
</div>
