(function () {

  var myapp = angular.module('wp-routes', ['ngRoute']);

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

})();
