import Vue from 'vue'

import VueRouter from 'vue-router'

import routes from './routes';

import UserSettings from '@/components/UserSettings/UserSettings'

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
    },
    mounted ()
    {
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
    methods: {
        darkLightModeUpdate: function() {
            this.isDark = !this.isDark;
            localStorage.isDark = this.isDark;
        }
    },
    components:{
        UserSettings
    },
    router: new VueRouter(routes)
});
