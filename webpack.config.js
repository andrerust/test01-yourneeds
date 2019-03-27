var Encore = require('@symfony/webpack-encore');
const CopyWebpackPlugin = require('copy-webpack-plugin');

Encore
    // the project directory where all compiled assets will be stored
    .setOutputPath('public/build/')

    // the public path used by the web server to access the previous directory
    .setPublicPath('/build')

    // will create public/build/app.js and public/build/app.css
    //.addEntry('base', './public/assets/js/base.js')
    //.addEntry('layout', './public/assets/js/layout.js')
    //.addEntry('static', './public/assets/js/static.js')
    //.addEntry('admin-edit', './public/assets/js/admin-edit.js')
    /*.addEntry('dashboard', './public/assets/js/dashboard.js')*/
    //.addEntry('tariff', './public/assets/js/tariff.js')
    //.addEntry('manager', './public/assets/manager/js/manager.js')
    //.addEntry('manager-profile', './public/assets/manager/js/manager-profile.js')

    .addEntry('yourneeds-base', './public/assets/yourneeds-base.js')
    .addEntry('yourneeds-home', './public/assets/home/yourneeds-home.js')
    .addEntry('yourneeds-manager', './public/assets/manager/yourneeds-manager.js')
    .addEntry('survey', './public/assets/js/survey/survey.js')
    .addEntry('surveyCore', './public/assets/js/survey/surveyCore.js')
    .addEntry('yourneeds-mm-base', './public/assets/yourneeds-mm-base.js')
    //.addEntry('yourneeds-profile', './public/assets/profile/yourneeds-profile.js')
    //.addEntry('yourneeds-admin', './public/assets/admin/yourneeds-admin.js')

    .enableBuildNotifications()

    .autoProvidejQuery()
    .autoProvideVariables({ Popper: ['popper.js', 'default'] })

    .addPlugin(new CopyWebpackPlugin([
        // copies to {output}/static
        {from: './public/assets/static', to: 'static'}
    ]))
    .addPlugin(new CopyWebpackPlugin([
        // copies to {output}/static
        {from: './public/assets/fonts', to: 'static/fonts'}
    ]))
    .addPlugin(new CopyWebpackPlugin([
        // copies to {output}/static
        {from: './public/assets/home/images', to: 'static/images'},
        {from: './public/assets/manager/images', to: 'static/images'}
    ]))

    .enableSourceMaps(!Encore.isProduction())
    .enableSassLoader()
;

// export the final configuration
module.exports = Encore.getWebpackConfig();