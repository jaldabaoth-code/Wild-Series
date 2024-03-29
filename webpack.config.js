const Encore = require('@symfony/webpack-encore');

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
    // directory where compiled assets will be stored
    .setOutputPath('public/build/')
    // public path used by the web server to access the output path
    .setPublicPath('/build')
    // only needed for CDN's or sub-directory deploy
    // .setManifestKeyPrefix('build/')
    .copyFiles({
        from: './assets/images',

        // optional target path, relative to the output dir
        // to: 'images/[path][name].[ext]',

        // if versioning is enabled, add the file hash too
        // to: 'images/[path][name].[hash:8].[ext]',

        // only copy files matching this pattern
        // pattern: /\.(png|jpg|jpeg)$/
    })
    /*
     * ENTRY CONFIG
     *
     * Each entry will result in one JavaScript file (e.g. app.js)
     * and one CSS file (e.g. app.css) if your JavaScript imports CSS.
     */
    .addEntry('app', './assets/app.js')

    .addStyleEntry('header', './assets/styles/includes/header.scss')
    .addStyleEntry('navbar', './assets/styles/includes/navbar.scss')
    .addStyleEntry('footer', './assets/styles/includes/footer.scss')
    .addStyleEntry('registeration', './assets/styles/security/register.scss')
    .addStyleEntry('login', './assets/styles/security/login.scss')
    .addStyleEntry('home', './assets/styles/home/home.scss')
    .addStyleEntry('showCategory', './assets/styles/category/show.scss')
    .addStyleEntry('formCategory', './assets/styles/category/form.scss')
    .addStyleEntry('newCategory', './assets/styles/category/new.scss')
    .addStyleEntry('editCategory', './assets/styles/category/edit.scss')
    .addStyleEntry('indexSeries', './assets/styles/series/index.scss')
    .addStyleEntry('showSeries', './assets/styles/series/show.scss')
    .addStyleEntry('formSeries', './assets/styles/series/form.scss')
    .addStyleEntry('newSeries', './assets/styles/series/new.scss')
    .addStyleEntry('editSeries', './assets/styles/series/edit.scss')
    .addStyleEntry('showSeason', './assets/styles/season/show.scss')
    .addStyleEntry('formSeason', './assets/styles/season/form.scss')
    .addStyleEntry('newSeason', './assets/styles/season/new.scss')
    .addStyleEntry('editSeason', './assets/styles/season/edit.scss')
    .addStyleEntry('showEpisode', './assets/styles/episode/show.scss')
    .addStyleEntry('formEpisode', './assets/styles/episode/form.scss')
    .addStyleEntry('newEpisode', './assets/styles/episode/new.scss')
    .addStyleEntry('editEpisode', './assets/styles/episode/edit.scss')
    .addStyleEntry('indexActor', './assets/styles/actor/index.scss')
    .addStyleEntry('showActor', './assets/styles/actor/show.scss')
    .addStyleEntry('formActor', './assets/styles/actor/form.scss')
    .addStyleEntry('newActor', './assets/styles/actor/new.scss')
    .addStyleEntry('editActor', './assets/styles/actor/edit.scss')
    .addStyleEntry('formCommentEpisode', './assets/styles/comment/formCommentEpisode.scss')

    // enables the Symfony UX Stimulus bridge (used in assets/bootstrap.js)
    .enableStimulusBridge('./assets/controllers.json')

    // When enabled, Webpack "splits" your files into smaller pieces for greater optimization.
    .splitEntryChunks()

    // will require an extra script tag for runtime.js
    // but, you probably want this, unless you're building a single-page app
    .enableSingleRuntimeChunk()

    /*
     * FEATURE CONFIG
     *
     * Enable & configure other features below. For a full
     * list of features, see:
     * https://symfony.com/doc/current/frontend.html#adding-more-features
     */
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enableSourceMaps(!Encore.isProduction())
    // enables hashed filenames (e.g. app.abc123.css)
    .enableVersioning(Encore.isProduction())

    .configureBabel((config) => {
        config.plugins.push('@babel/plugin-proposal-class-properties');
    })

    // enables @babel/preset-env polyfills
    .configureBabelPresetEnv((config) => {
        config.useBuiltIns = 'usage';
        config.corejs = 3;
    })

    // enables Sass/SCSS support
    .enableSassLoader()

    // uncomment if you use TypeScript
    // .enableTypeScriptLoader()

    // uncomment if you use React
    // .enableReactPreset()

    // uncomment to get integrity="..." attributes on your script & link tags
    // requires WebpackEncoreBundle 1.4 or higher
    // .enableIntegrityHashes(Encore.isProduction())

    // uncomment if you're having problems with a jQuery plugin
    // .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
