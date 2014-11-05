require.config({
    paths: {
        jquery:     'libs/jquery/jquery',
        underscore: 'libs/underscore/underscore',
        backbone:   'libs/backbone/backbone',
        text:       'libs/require/text',
        json2:      'libs/json/json2',
        templates:   '../templates'
    },
	urlArgs: "bust=" + (new Date()).getTime(),

});
require(['app', 'json2'], function(App) {
    App.initialize();
});