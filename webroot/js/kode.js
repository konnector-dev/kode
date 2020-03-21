
new Vue({
    el: '#themer',
    data: {
        isLight: false
    },
    methods: {
        themeUpdate: function() {
            this.isLight = !this.isLight;
        }
    }
});
