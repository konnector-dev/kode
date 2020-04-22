let path = require('path');

module.exports = {
    publicPath: '',
    outputDir: 'webroot/dist',
    chainWebpack: config => {
        config.resolve.alias.set('vue$', 'vue/dist/vue.common.js');
    },
}
