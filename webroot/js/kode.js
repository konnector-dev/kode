
new Vue({
    el: '#themer',
    data: {
        isDark: false
    },
    methods: {
        themeUpdate: function() {
            this.isDark = !this.isDark;
        }
    }
});
