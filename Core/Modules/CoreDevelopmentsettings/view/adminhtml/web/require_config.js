(function () {
   
    var config = {       
        shim: {
            "functions":["jquery"]           
        },deps: ["functions"]
    };
    require.config(config);
})();
(function () {    /**
     * Copyright © 2016 Magento. All rights reserved.
     */
    var config = {
        map: {
            '*': {
                sidemenu: 'CoreDevelopmentsettings/side_menu', 
            }
        },
        shim:{
            sidemenu: ["jquery"]
        },
        "deps": ["sidemenu"]
    };
    require.config(config);
})();
(function () {    /**
     * Copyright © 2016 Magento. All rights reserved.
     */
    var config = {
        map: {
            '*': {
                functions: 'CoreDevelopmentsettings/functions', 
                "CoreDevelopmentsettings/app": 'CoreDevelopmentsettings/app'
                
            }
        },
        shim:{
            functions: ["jquery"],
            "CoreDevelopmentsettings/app":["jquery"]
        },
        "deps": ["functions"]
    };
    require.config(config);
})();