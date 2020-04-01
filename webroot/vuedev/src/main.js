import Vue from 'vue'

import VueRouter from 'vue-router'

import routes from './routes';

Vue.use(VueRouter);

Vue.config.productionTip = false

new Vue({
    el: '.darkLight',
    data: {
        isDark: false,
        showUserOptions: false,
        token: ''
    },
    mounted() {
        if (localStorage.isDark) {
            this.isDark = JSON.parse(localStorage.isDark);
        }
        this.token = window.token;
    },
    methods: {
        darkLightModeUpdate: function() {
            this.isDark = !this.isDark;
            localStorage.isDark = this.isDark;
        },
        toggleUserOptions: function () {
            this.showUserOptions = !this.showUserOptions;
        }
    },
    router: new VueRouter(routes)
});
