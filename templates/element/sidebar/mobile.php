<?php
use Cake\Core\Configure;
use Cake\Routing\Router;

?>
<!-- Off-canvas menu for mobile -->
<div v-show="isMobileMenuOpen" class="mobile-sidebar md:hidden">
    <div class="fixed inset-0 z-30 transition-opacity ease-linear duration-300">
        <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
    </div>
    <div class="fixed inset-0 flex z-40">
        <div class="flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-300 transform ease-in-out duration-300"
             :class="{'bg-gray-800': isDark}"
        >
            <div class="absolute top-0 right-0 -mr-14 p-1"
            >
                <button
                    @click="isMobileMenuOpen = false"
                    class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-gray-600">
                    <span class="h-6 w-6 text-gray-600 text-xl">
                        <i class="fa fa-times"></i>
                    </span>
                </button>
            </div>
            <div class="flex-shrink-0 flex items-center px-4">
                <img class="h-8 w-auto"
                     src="<?php echo Router::url('/img/kode.png'); ?>"
                     alt="<?php echo Configure::read('app_name'); ?>" />
            </div>
            <div class="mt-5 flex-1 h-0 overflow-y-auto bg-gray-300"
                 :class="{'bg-gray-800': isDark}"
            >
                <nav class="px-2 bg-gray-300"
                     :class="{'bg-gray-800': isDark}"
                     @click="isMobileMenuOpen=false"
                >
                    <router-link to="dashboard"
                                 class="
                        group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md"
                                 :class="{
                        'text-gray-400 focus:bg-gray-900 hover:bg-gray-900': isDark,
                        'text-gray-900 focus:bg-gray-400 hover:bg-gray-400': !isDark
                    }"
                    >
                    <span class="mr-3 h-6 w-6"
                    >
                        <i class="fa fa-home text-2xl"></i>
                    </span>
                        Dashboard
                    </router-link>
                    <router-link to="projects"
                                 class="
                        mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md
                        focus:outline-none"
                                 :class="{
                        'text-gray-400 focus:bg-gray-900 hover:bg-gray-900': isDark,
                        'text-gray-900 focus:bg-gray-400 hover:bg-gray-400': !isDark
                    }"
                    >
                    <span class="mr-3 h-6 w-6">
                        <i class="fa fa-folder text-2xl"></i>
                    </span>
                        Projects
                    </router-link>
                    <router-link to="teams"
                                 class="
                        mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md
                        focus:outline-none"
                                 :class="{
                        'text-gray-400 focus:bg-gray-900 hover:bg-gray-900': isDark,
                        'text-gray-900 focus:bg-gray-400 hover:bg-gray-400': !isDark
                    }"
                    >
                    <span class="mr-3 h-6 w-6">
                        <i class="fa fa-users text-2xl"></i>
                    </span>
                        Teams
                    </router-link>
                    <router-link to="help"
                                 class="
                        mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md
                        focus:outline-none"
                                 :class="{
                        'text-gray-400 focus:bg-gray-900 hover:bg-gray-900': isDark,
                        'text-gray-900 focus:bg-gray-400 hover:bg-gray-400': !isDark
                    }"
                    >
                    <span class="mr-3 h-6 w-6">
                        <i class="fa fa-question text-2xl"></i>
                    </span>
                        Help
                    </router-link>
                </nav>
            </div>
        </div>
        <div class="flex-shrink-0 w-14">
            <!-- Force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>
