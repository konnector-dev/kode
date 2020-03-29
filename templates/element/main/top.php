<div class="relative z-10 flex-shrink-0 flex h-16"
     :class="{'bg-gray-800': isDark, 'bg-gray-300': !isDark}">
    <button
        @click.stop="sidebarOpen = true"
        class="
            px-4 border-r border-gray-200 text-gray-500
            focus:outline-none focus:bg-gray-100 focus:text-gray-600 md:hidden">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
        </svg>
    </button>
    <div class="flex-1 px-4 flex justify-between">
        <div class="flex-1 flex">
            <div
                class="w-full flex md:ml-0"
                :class="{
                            'text-gray-300 focus:bg-gray-900 hover:bg-gray-900': isDark,
                            'text-gray-900 focus:bg-gray-300 hover:bg-gray-300': !isDark
                        }"
            >
                <label for="search_field" class="sr-only">Search</label>
                <div
                    class="relative w-full">
                    <div class="absolute flex items-center pointer-events-none">
                        <span class="h-5 w-5 px-1 py-5"
                            :class="{
                                'text-gray-500': isDark,
                                'text-gray-600': !isDark
                            }"
                        >
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                    <input
                        id="search_field"
                        class="
                            block w-full h-full pl-8 pr-3 py-2
                            focus:outline-none sm:text-sm"
                        :class="{
                            'text-gray-300 bg-gray-800 focus:bg-gray-800 focus:placeholder-gray-600': isDark,
                            'text-gray-700 bg-gray-300 placeholder-gray-600 focus:placeholder-gray-500': !isDark
                        }"
                        placeholder="Search" />
                </div>
            </div>
        </div>
        <div class="ml-4 flex items-center md:ml-6">
            <button
                class="
                    p-1 text-gray-500 rounded-full w-10 text-xl
                    hover:bg-gray-100 hover:text-gray-700
                    focus:outline-none focus:shadow-outline focus:text-gray-500">
                <span class="">
                    <i class="fa fa-bell-o"></i>
                </span>
            </button>
            <button
                class="
                        p-1 mx-1 text-gray-400 rounded-full w-10 text-xl
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
