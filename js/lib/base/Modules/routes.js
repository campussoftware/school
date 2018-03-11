/**
 * Defines the main routes in the application.
 * The routes you see here will be anchors '#/' unless specifically configured otherwise.
 */

define(['./../Modules/app'], function (app) {
    'use strict';
    return app.config(['$routeProvider', function ($routeProvider) {
		var templatePrefix = "";
        $routeProvider.when('/view1', {
            templateUrl: templatePrefix+'partials/partial1.html',
            controller: 'MyCtrl1'
        });

        $routeProvider.when('/view2', {
            templateUrl: templatePrefix+'partials/partial2.html',
            controller: 'MyCtrl2'
        });

        $routeProvider.otherwise({
            redirectTo: '/view1'
        });
    }]);
});
