(function () {
// initialize the app
var myapp = angular.module('wp', ['ngSanitize','wp-controller', 'wp-routes', 'wp-directives']);

// set the configuration
myapp.run(['$rootScope', function($rootScope){
  // the following data is fetched from the JavaScript variables created by wp_localize_script(), and stored in the Angular rootScope
  $rootScope.dir = BlogInfo.url;
  $rootScope.site = BlogInfo.site;
  $rootScope.api = AppAPI.url;
}]);

})();
