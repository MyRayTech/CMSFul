var Encore = require('@symfony/webpack-encore');
var webpack = require('webpack');

Encore
    .setOutputPath('web/assets/build')
    .setPublicPath('/assets/build')
    .cleanupOutputBeforeBuild()
    .addEntry('app', './web/assets/js/cms.js')
    .addEntry('admin', './web/assets/js/admin.js')
    .addStyleEntry('stylesheet', './web/assets/scss/stylesheet.scss')
    .addStyleEntry('admin_style', './web/assets/scss/admin.scss')
    .addPlugin(new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery',
            Popper: ['popper.js', 'default']
          }))
    // allow sass/scss files to be processed
    .enableSassLoader(function(sassOptions) {}, {
         resolveUrlLoader: false
     })
    .enableVueLoader()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
;

// export the final configuration
 var config = Encore.getWebpackConfig();
 config.resolve.alias = {
     'vue$': 'vue/dist/vue.js'
 }
 module.exports = config