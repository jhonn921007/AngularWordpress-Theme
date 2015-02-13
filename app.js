// initialize the app
var myapp = angular.module('myapp', ['ngSanitize','ngRoute']);

// Routes and Views
myapp.config(function($routeProvider){
  $routeProvider.when("/", {
    templateUrl : "templates/index.html",
    controller : "indexController"
  })
  .when("/pagina-ejemplo", {
    templateUrl : "templates/pagina-ejemplo.html",
    controller : "paginaController"
  })
  //este es digamos, al igual que en un switch el default, en caso que
  //no hayamos concretado que nos redirija a la página principal
  .otherwise({ reditrectTo : "/" });
});


// set the configuration
myapp.run(['$rootScope', function($rootScope){
  // the following data is fetched from the JavaScript variables created by wp_localize_script(), and stored in the Angular rootScope
  $rootScope.dir = BlogInfo.url;
  $rootScope.site = BlogInfo.site;
  $rootScope.api = AppAPI.url;
}]);

myapp.directive("commentsPosts", function(){
  return {
    restrict: "E",
    templateUrl: "templates/partials/comments-posts.html"
  };
});

myapp.directive("infoPosts", function(){
  return {
    restrict: "E",
    templateUrl: "templates/partials/info-posts.html"
  };
});

myapp.directive("posts", function(){
  return {
    restrict: "E",
    templateUrl: "templates/partials/posts.html"
  };
});

myapp.directive("categories", function(){
  return {
    restrict: "E",
    templateUrl: "templates/partials/categories.html"
  };
});

// add a controller indexController
myapp.controller('indexController', ['$scope', '$http', function($scope, $http) {
  // load posts from the WordPress API
  $http({
    method: 'GET',
    url: $scope.api, // derived from the rootScope
    params: {
      json: 'get_posts'
    }
  }).
  success(function(data, status, headers, config) {
    $scope.postdata = data.posts;
  }).
  error(function(data, status, headers, config) {
  });
  $scope.comments = [
    {
      body: "Putas",
      email: 'jhonn@outlook.com',
      date: 20150210
    }
  ];

  $scope.show = false;
  $scope.toggle = function () {
    $scope.show = !$scope.show;
  };

}])

// add a controller paginaController
myapp.controller("paginaController", ['$scope', '$http', function($scope, $http){
  $http({
    method: 'GET',
    url: $scope.api, // derived from the rootScope
    params: {
      json: 'get_page_index'
    }
  }).
  success(function(data, status, headers, config) {
    $scope.page = data.pages;
  });

  $scope.show = false;
  $scope.toggle = function () {
    $scope.show = !$scope.show;
  };

}])

// add a controller categoriesController
myapp.controller("categoriesController", ['$scope', '$http', function($scope, $http){
  $http({
    method: 'GET',
    url: $scope.api, // derived from the rootScope
    params: {
      json: 'get_category_index'
    }
  }).
  success(function(data, status, headers, config) {
    $scope.categories = data.categories;
  });

}])
