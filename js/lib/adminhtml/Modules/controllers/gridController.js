define(['./module'], function (controllers) {
    'use strict';
    controllers.factory("gridDataFactory", ['$http', function ($http) {
            var gridDataFactory = {
                gridDataDetails: function (currentNodeName, action, configurationSettings) {
                    var formname = "form#result_" + currentNodeName;
                    var formdata = $(formname).serialize();
                    if (formdata === "")
                    {
                        if (configurationSettings.parentnode !== null)
                        {
                            formdata = currentNodeName + "_parentnode=" + configurationSettings.parentnode;
                        }
                        if (configurationSettings.parentAction !== null)
                        {
                            formdata += "&" + currentNodeName + "_parentaction=" + configurationSettings.parentAction;
                        }
                        if (configurationSettings.parentSelector !== null)
                        {
                            formdata += "&" + currentNodeName + "_parentidvalue=" + configurationSettings.parentSelector;
                        }
                    }
                    return $http(
                            {
                                url: $("#sitehostadmin").val() + currentNodeName + "/" + action,
                                method: "POST",
                                data: formdata,
                                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                            })
                            .then(function (response) {
                                return response;
                            });
                }
            };
            return gridDataFactory;
        }]);
    controllers.controller('gridController', ['$scope', 'gridDataFactory', function ($scope, gridDataFactory) {
            $scope.itemHeaderDetails = [];
            $scope.itemListDetails = [];
            $scope.itemRequestDetails = [];
            $scope.showFieldDetails = [];
            $scope.individualActions = [];
            $scope.singleActions = [];
            $scope.mraActions = [];
            $scope.configurationSettings = [];
            $scope.websiteAdminUrl = $("#sitehostadmin").val();
            $scope.websiteUrl = $("#sitehost").val();
            $scope.init = function (nodeName, configurationJson = null)
            {
                $scope.configurationSettings[nodeName] = [];
                try
                {
                    var configurationJson = $.parseJSON(configurationJson);
                    $scope.configurationSettings[nodeName] = configurationJson;
                } catch (e)
                {

                }

                $scope.getNodeGridDetails(nodeName);
            };
            $scope.getNodeGridDetails = function (nodeName, action = "gridResultJson")
            {
                $scope.loadingStatus = 'true';
                $scope.currentNodeName = nodeName;
                var promise = gridDataFactory.gridDataDetails($scope.currentNodeName, action, $scope.configurationSettings[nodeName]);
                promise.then(function (data) {
                    var responseData = data.data;
                    $scope.itemHeaderDetails[$scope.currentNodeName] = responseData.headerlist;
                    $scope.showFieldDetails[$scope.currentNodeName] = responseData.headerlist;
                    $scope.itemListDetails[$scope.currentNodeName] = responseData.datalist;
                    $scope.itemRequestDetails[$scope.currentNodeName] = responseData.requestedParams;
                    $scope.individualActions[$scope.currentNodeName] = responseData.individualActions;
                    $scope.singleActions[$scope.currentNodeName] = responseData.singleActions;
                    $scope.mraActions[$scope.currentNodeName] = responseData.mraActions;
                    $scope.showfields = ["nodename"];
                    $scope.primaryKey = responseData.primaryKeyForValue;
                    $scope.totalRecordsCount = responseData.totalRecordsCount;
                    $scope.recordsPerPage = responseData.recordsPerPage;
                    $scope.currentSelectedPage = responseData.currentSelectedPage;
                    $scope.currentSelectedRpp = responseData.currentSelectedRpp;
                    $scope.PagesList = [];
                    $scope.recordsPerPageList = [];

                    var i = 1;
                    while (responseData.recordsPerPage * i <= responseData.totalRecordsCount)
                    {
                        $scope.recordsPerPageList.push(responseData.recordsPerPage * i);
                        i++;
                    }
                    var i = 0;
                    while (responseData.currentSelectedRpp * i <= responseData.totalRecordsCount)
                    {
                        i++;
                        $scope.PagesList.push(i);

                    }
                });
                $scope.loadingStatus = 'false';
            };
            $scope.setSelectedPage = function (nodeName)
            {
                var pageValue = $("#page_input_" + nodeName).val();
                $("#page_" + nodeName).val(pageValue);
                $scope.getNodeGridDetails(nodeName);
            };
            $scope.setSelectedRecordsPage = function (nodeName)
            {
                $("#page_" + nodeName).val(1);
                var rpp = $("#rpp_input_" + nodeName).val();
                $("#rpp_" + nodeName).val(rpp);
                $scope.getNodeGridDetails(nodeName);

            };
            $scope.filterGrid = function (nodeName)
            {
                $("#page_" + nodeName).val(1);
                $scope.getNodeGridDetails(nodeName);

            };
            $scope.checkaction = function (nodeName, selectType = null)
            {

                var flag = "checked";
                var className = ".mra_" + nodeName;
                if ($("#checkall_" + nodeName + ":checked").length == 0) {
                    flag = false;
                }
                $(className).each(function () {
                    $(this).prop("checked", flag);
                });

            };
            $scope.organizegrid = function (nodeName)
            {
                var selectedFields = [];
                $("." + nodeName + "_showfields").each(function () {
                    if ($(this).is(":checked"))
                    {
                        selectedFields.push($(this).val());
                    }
                });
                var showFieldDetails = $scope.itemHeaderDetails[$scope.currentNodeName].filter(function (item) {
                    return selectedFields.includes(item.$id);
                });
                $scope.showFieldDetails[$scope.currentNodeName] = showFieldDetails;
            }
        }]);

});
