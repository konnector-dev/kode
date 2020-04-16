<template>
    <div class="relative z-10 flex-shrink-0 flex h-16"
         :class="{'bg-gray-800': dark, 'bg-gray-300': !dark}">
        <button
            @click="showMenu"
            class="
            mobileSidebarOpener
            px-4 text-gray-500
            focus:outline-none focus:bg-gray-100 focus:text-gray-600 md:hidden">
            <span class="h-6 w-6" >
                <i class="fa fa-bars"></i>
            </span>
        </button>
        <div class="flex-1 px-4 flex justify-between">
            <div class="flex-none items-stretch organisations hidden md:flex h-full">
                <div class="self-center text-gray-500 mx-4 w-40">
                    <p>
                        <i class="fa fa-chevron-circle-down"></i>
                        <span class="pl-1">
                        No organisation
                    </span>
                    </p>
                </div>
            </div>
            <div class="flex-1 flex">
                <div
                    class="w-full flex md:ml-0"
                    :class="{
                            'text-gray-300 focus:bg-gray-900 hover:bg-gray-900': dark,
                            'text-gray-900 focus:bg-gray-300 hover:bg-gray-300': !dark
                        }"
                >
                    <label for="search_field" class="sr-only">Search</label>
                    <div
                        class="relative w-full">
                        <div class="absolute flex items-center pointer-events-none">
                        <span class="h-5 w-5 px-1 py-5"
                              :class="{
                                'text-gray-500': dark,
                                'text-gray-600': !dark
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
                            'text-gray-300 bg-gray-800 focus:bg-gray-800 focus:placeholder-gray-600': dark,
                            'text-gray-700 bg-gray-300 placeholder-gray-600 focus:placeholder-gray-500': !dark
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
                    @click="modeUpdate">
                    <span :class="{'hidden': dark}" title="Dark mode" class="text-kored">
                        <i class="fa fa-moon-o"></i>
                    </span>
                    <span :class="{'hidden': !dark}" title="Light mode" class="text-kored">
                        <i class="fa fa-sun-o"></i>
                    </span>
                </button>
                <user-settings></user-settings>
            </div>
        </div>
    </div>
</template>

<script>
    import UserSettings from "../components/UserSettings";
    export default {
        computed: {
            dark() {
                return this.$store.getters.DARK
            },
            kode() {
                return this.$store.getters.KODE
            }
        },
        methods: {
            modeUpdate: function () {
                this.$store.dispatch("THEME_UPDATE", !this.dark);
            },
            showMenu: function () {
                this.$store.dispatch('OPEN_MOBILE_SIDEBAR');
            }
        },
        components: {
            UserSettings
        }
    };
</script>
