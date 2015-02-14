(function () {

  var myapp = angular.module('wp-controller',[]);

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
  }).
  error(function(data, status, headers, config) {
    console.log('Error Widget');
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
  }).
  error(function(data, status, headers, config) {
    console.log('Error Widget');
  });;

}])

// add a controller sideBarController
myapp.controller("sideBarController", ['$scope', '$http', function($scope, $http){
  $http({
    method: 'GET',
    url: $scope.api,
    params: {
      json: '/widgets/get_sidebar/?sidebar_id=sidebar-1'
    }
  }).
  success(function(datawidgets, status, headers, config) {
    $scope.widget = datawidgets.widgets;
    console.log(datawidgets);
  }).
  error(function(data, status, headers, config) {
    console.log('Error Widget');
  });
}]);

})();
