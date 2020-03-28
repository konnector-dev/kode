
new Vue({
    el: '.darkLight',
    data: {
        isDark: false,
        showUserOptions: false
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
        },
        toggleUserOptions: function () {
            this.showUserOptions = !this.showUserOptions;
        }
    },
});
