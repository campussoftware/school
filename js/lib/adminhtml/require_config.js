(function () {
   
    var config = {
        paths: {
            jquery: ["jquery"],
            "bootstrap":"bootstrap",
            'angular': 'angular/angular',
            'angular-route': 'angular-route/angular-route',
            'domReady': 'requirejs-domready/domReady'

        }
        , shim: {
            'angular': {
                exports: 'angular'
            },
            'angular-route': {
                deps: ['angular']
            },
            'bootstrap': {
                deps: ['jquery']
            }
        }, deps: ["bootstrap", "angular-bootstrap"]
    };
    require.config(config);
})();
