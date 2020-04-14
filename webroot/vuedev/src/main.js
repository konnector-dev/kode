import Vue from 'vue'

import VueRouter from 'vue-router'

import store from "./store";

import routes from './routes';

// Copying CakePHP view elements to Vue (feels weird)
import Kue from "./kode/Kue";

import Axios from 'axios';

window.axios = Axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Vue.use(VueRouter);

Vue.config.productionTip = false;

let kue = Vue.compile('<Kue></Kue>');


new Vue({
    el: '.darkLight',
    store,
    data: {
    },
    created ()
    {
        this.checkToken();
        this.setKonfig();
    },
    mounted() {
        this.setMode();
    },
    methods: {
        checkToken: function() {
            let token = '';
            if(typeof this.$route.query.token === 'undefined') {
                if (localStorage.token) {
                    token = localStorage.token;
                }
            } else {
                token = this.$route.query.token;
            }
            if(token === '') {
                localStorage.removeItem('token');
                window.location.href = '/login';
            }
            localStorage.token = token;
            this.$store.state.token = token;
            if( typeof this.$route.query.token !== 'undefined' && this.$route.query.token.length > 0) {
                this.$router.replace(this.$router.currentRoute.path).then();
            }
        },
        setMode: function () {
            let lightMode = true;
            if(typeof localStorage.isDark !== 'undefined') {
                lightMode = JSON.parse(localStorage.isDark);
            }
            this.$store.dispatch("THEME_UPDATE", lightMode).then();
        },
        setKonfig: function () {
            Axios.get('/konfig').then( konfig => {
                this.$store.dispatch('SET_KODE', konfig).then();
            });
        }
    },
    render: kue.render,
    components:{
        Kue
    },
    router: new VueRouter(routes)
});
