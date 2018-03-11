define(['./module'], function (controllers) {
    'use strict';
    controllers.factory("sidemenuFactory",['$http', function ($http) {
            var sidemenuFactory = {
                sideMenuItemList: function () {
                    return $http(
                            {
                                url: $("#sitehostadmin").val()+"core_registernode/menuJson",
                                method: "GET",
                            })
                            .then(function (response) {
                                return response;
                            });
                }
            };
            return sidemenuFactory;
        }]);

    controllers.controller('menuTest', ['$scope',"sidemenuFactory"
        , function ($scope,sidemenuFactory) {
            
            $scope.menuBaseLink=$("#sitehostadmin").val();
            $scope.sideMenuItemList=[];
            sidemenuFactory.sideMenuItemList().then(function(responseData){
              $scope.sideMenuItemList=responseData.data;               
            });
        }]);
});