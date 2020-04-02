/**
 * This file is loaded outside the core application.
 * Uses Vue from CDN
 */
new Vue({
    el: '.darkLight',
    data: {
        isDark: false
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
    }
});
