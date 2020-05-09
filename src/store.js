import Vuex from 'vuex';
import Vue from 'vue';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        isDark: false,
        token: '',
        isMobileMenuOpen: false,
        kode: {

        }
    },
    getters: {
        DARK: state => {
            return state.isDark
        },
        TOKEN: state => {
            return state.token
        },
        MOBILE: state => {
            return state.isMobileMenuOpen
        },
        KODE: state => {
            return state.kode
        }
    },
    mutations: {
        SET_KODE: ((state, konfig) => {
            state.kode = konfig;
        }),
        THEME_UPDATE: ((state, isDark) => {
            localStorage.isDark = isDark;
            state.isDark = isDark;
        }),
        MOBILE_SIDEBAR: ((state, status) => {
            state.isMobileMenuOpen = status;
        })
    },
    actions: {
        SET_KODE: (context, konfig) => {
            context.commit('SET_KODE', konfig);
        },
        THEME_UPDATE: ((context, dark) => {
            context.commit('THEME_UPDATE', dark);
        }),
        OPEN_MOBILE_SIDEBAR: ((context) => {
            context.commit('MOBILE_SIDEBAR', true);
        }),
        CLOSE_MOBILE_SIDEBAR: ((context) => {
            context.commit('MOBILE_SIDEBAR', false);
        })
    }
});
