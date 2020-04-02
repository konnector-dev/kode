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
        token: ''
    },
    created () {
        this.token = this.$route.query.token;
    },
    mounted() {
        if (localStorage.isDark) {
            this.isDark = JSON.parse(localStorage.isDark);
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
