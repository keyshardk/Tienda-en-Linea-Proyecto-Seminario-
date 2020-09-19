var app = angular.module('BasicApp', ['ngMaterial','ngMdIcons','ngAnimate']);

app.config(function($mdThemingProvider, $mdIconProvider) {
   
  $mdThemingProvider.theme('default')
    .primaryPalette('indigo')
    .accentPalette('pink')
    .backgroundPalette('grey')
    .warnPalette('red');
  $mdThemingProvider.theme('dark')
    .primaryPalette('indigo')
    .accentPalette('pink')
    .backgroundPalette('grey')
    .warnPalette('red');
  $mdIconProvider
       .iconSet('social', 'img/icons/sets/social-icons.svg', 24)
       .defaultIconSet('img/icons/sets/core-icons.svg', 24);
});

app.controller('MenuCtrl',['$scope', '$mdSidenav', function($scope, $mdSidenav){
  $scope.toggleSidenav = function(menuId){
    $mdSidenav(menuId).toggle();
  };
  $scope.show = "false";
  $scope.showFilters = function(){
    $scope.show = true;
  };
}]);