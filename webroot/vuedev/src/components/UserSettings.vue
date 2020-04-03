<template>
    <div class="UserSettings">
        <div class="ml-1 relative">
            <div>
                <button
                    v-on:click="toggleOptions"
                    class="
                    p-1 text-gray-500 rounded-full w-10 text-xl
                    hover:bg-gray-100 hover:text-gray-700
                    focus:outline-none focus:shadow-outline focus:text-gray-500">
                    <span :class="{ hidden: isUserImage }">
                        <i class="fa fa-user"></i>
                    </span>
                    <span :class="{ hidden: !isUserImage }">
                        <img class="rounded-full"
                             :src="userImage"
                             alt="" />
                    </span>
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
            this.open = false;
            this.isUserImage = false;
            this.userImage = '/img/jdecode.png';
        },
        methods: {
            toggleOptions: function () {
                this.open = !this.open;
            }
        },
        data() {
            return {
                open: this.open,
                isUserImage: this.isUserImage,
                userImage: this.userImage
            }
        }
    };
</script>
