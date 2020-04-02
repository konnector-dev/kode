<template>
    <div class="UserSettings">
        <div class="ml-3 relative">
            <div>
                <button v-on:click="toggleOptions" class="max-w-xs flex items-center text-sm rounded-full focus:outline-none focus:shadow-outline">
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" />
                </button>
            </div>
            <div
                :class="{ hidden: !open }"
                class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                <div class="py-1 rounded-md bg-white shadow-xs">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150">Settings</a>
                    <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150">Logout</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        created () {
            this.open = false
        },
        methods: {
            toggleOptions: function () {
                this.open = !this.open;
            }
        },
        data() {
            return {
                open: this.open
            }
        }
    };
</script>
