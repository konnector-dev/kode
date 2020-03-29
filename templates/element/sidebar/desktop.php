<?php
use Cake\Core\Configure;
use Cake\Routing\Router;

?>
<!-- Static sidebar for desktop -->
<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64">
        <div
            class="flex items-center h-16 flex-shrink-0 px-4"
             :class="{'bg-gray-900': isDark, 'bg-gray-400': !isDark}">
            <img class="h-8 w-auto"
                 src="<?php echo Router::url('/img/kode.png'); ?>"
                 alt="<?php echo Configure::read('app_name'); ?>" />
        </div>
        <div class="h-0 flex-1 flex flex-col overflow-y-auto">
            <!-- Sidebar component, swap this element with another sidebar if you like -->
            <nav class="flex-1 px-2 py-4 bg-gray-300"
                 :class="{'bg-gray-800': isDark}">
                <a href="#"
                    class="
                        group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md
                        transition ease-in-out duration-150"
                    :class="{
                        'text-gray-400 bg-gray-900 focus:bg-gray-900 hover:bg-gray-900': isDark,
                        'text-gray-900 bg-gray-400 focus:bg-gray-400 hover:bg-gray-400': !isDark
                    }"
                >
                    <span
                        class="
                            mr-3 h-6 w-6
                            group-hover:text-gray-300
                            group-focus:text-gray-300
                            transition ease-in-out duration-150"
                        :class="{
                            'text-gray-400 focus:bg-gray-900 hover:bg-gray-900': isDark,
                            'text-gray-900 focus:bg-gray-400 hover:bg-gray-400': !isDark
                        }"
                    >
                        <i class="fa fa-home text-2xl"></i>
                    </span>
                    Dashboard
                </a>
                <a
                    href="#"
                    class="
                        mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md
                        focus:outline-none
                        transition ease-in-out duration-150"
                    :class="{
                        'text-gray-400 focus:bg-gray-900 hover:bg-gray-900': isDark,
                        'text-gray-900 focus:bg-gray-400 hover:bg-gray-400': !isDark
                    }">
                    <span class="mr-3 h-6 w-6 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"
                         :class="{
                                'text-gray-400 focus:bg-gray-900 hover:bg-gray-900': isDark,
                                'text-gray-900 focus:bg-gray-400 hover:bg-gray-400': !isDark}">
                        <i class="fa fa-users text-2xl"></i>
                    </span>
                    Teams
                </a>
                <a
                    href="#"
                    class="
                        mt-1 group flex items-center px-2 py-2 text-sm leading-5 font-medium rounded-md
                        focus:outline-none
                        transition ease-in-out duration-150"
                    :class="{
                        'text-gray-400 focus:bg-gray-900 hover:bg-gray-900': isDark,
                        'text-gray-900 focus:bg-gray-400 hover:bg-gray-400': !isDark
                    }">
                    <span class="mr-3 h-6 w-6 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"
                         :class="{
                                'text-gray-400 focus:bg-gray-900 hover:bg-gray-900': isDark,
                                'text-gray-900 focus:bg-gray-400 hover:bg-gray-400': !isDark}">
                        <i class="fa fa-folder text-2xl"></i>
                    </span>
                    Projects
                </a>
            </nav>
        </div>
    </div>
</div>
