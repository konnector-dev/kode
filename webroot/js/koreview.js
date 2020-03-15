
new Vue({
    el: '#themer',
    data: {
        isLight: true
    },
    methods: {
        themeUpdate: function() {
            this.isLight = !this.isLight;
        }
    }
});
