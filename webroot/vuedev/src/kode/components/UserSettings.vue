<template>
    <div class="UserSettings">
        <div class="ml-1 relative">
            <div>
                <button
                    @click="toggleOptions"
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
                    <button
                        v-on:click="logout"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 transition ease-in-out duration-150">
                        Logout
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Axios from 'axios';

    window.axios = Axios;
    window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

    export default {
        mounted () {
            this.open = false;
            this.isUserImage = false;
            this.userImage = '/img/jdecode.png';
            this.user = {};
            window.axios.request({
                method: 'post',
                url: '/api/user-info',
                headers: {
                    bearer: localStorage.token
                }
            })
            .then(response => {
                if( typeof response.data.name === 'undefined' || response.data.name.length === 0) {
                    if(localStorage.token) {
                        localStorage.removeItem('token');
                    }
                    document.location.href = '/login';
                    return;
                }
                this.user = response.data;
                this.updateUser();
            })
            .catch(function (error) {
                console.log(error);
                localStorage.removeItem('token');
                document.location.href = '/login';
            });
        },
        methods: {
            toggleOptions: function () {
                this.open = !this.open;
            },
            updateUser: function () {
                this.isUserImage = true;
                this.userImage = this.user.avatar;
            },
            logout: function () {
                window.axios.request({
                    method: 'post',
                    url: '/api/logout',
                    headers: {
                        bearer: localStorage.token
                    }
                }).then(response => {
                    localStorage.removeItem('token');
                    if(response) {
                        console.log(response);
                    }
                    document.location.href = '/login';
                });
            }
        },
        data() {
            return {
                open: this.open,
                isUserImage: this.isUserImage,
                userImage: this.userImage,
                user: this.user
            }
        }
    };
</script>
