(function () {

  var myapp = angular.module('wp-directives', []);

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

myapp.directive("commentsPages", function(){
  return {
    restrict: "E",
    templateUrl: "templates/partials/comments-pages.html"
  };
});

myapp.directive("pages", function(){
  return {
    restrict: "E",
    templateUrl: "templates/partials/pages.html"
  };
});

myapp.directive("navbar", function(){
  return {
    restrict: "E",
    templateUrl: "templates/partials/navbar.html"
  };
});

})();
