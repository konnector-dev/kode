import Vue from 'vue'

import VueRouter from 'vue-router'

import routes from './routes';

import UserSettings from '@/components/UserSettings'

import Axios from 'axios';

window.axios = Axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.use(VueRouter);

Vue.config.productionTip = false

new Vue({
    el: '.darkLight',
    data: {
        isDark: false,
        token: '',
        isMobileMenuOpen: false
    },
    created () {

        if (localStorage.isDark) {
            this.isDark = JSON.parse(localStorage.isDark);
        }
        this.updateLinkActiveClass();
    },
    mounted ()
    {
        this.checkToken();
    },
    updated() {
        this.updateLinkActiveClass();
    },
    methods: {
        checkToken: function() {
            if(typeof this.$route.query.token === 'undefined') {
                if (localStorage.token) {
                    this.token = localStorage.token;
                }
            } else {
                this.token = this.$route.query.token;
                localStorage.token = this.token;
                this.$router.replace('dashboard').then();
            }
            if(this.token === '') {
                window.location.href = '/login';
            }
        },
        modeUpdate: function() {
            localStorage.isDark = this.isDark = !this.isDark;
            this.updateLinkActiveClass();
        },
        updateLinkActiveClass: function () {
            routes.linkActiveClass = (this.isDark ? 'bg-gray-900' : 'bg-gray-400');
        }
    },
    components:{
        UserSettings
    },
    router: new VueRouter(routes)
});
