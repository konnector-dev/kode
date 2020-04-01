let path = require('path');

module.exports = {
    publicPath: '',
    chainWebpack: config => {
        config.resolve.alias.set('vue$', 'vue/dist/vue.common.js');
    },
}
