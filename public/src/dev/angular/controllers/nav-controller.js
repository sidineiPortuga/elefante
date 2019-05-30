app.controller('navCtrl', ['$scope', function($scope) {

    $scope.hamburguerMenu = false;

    $scope.hamburguer = function(){
        $scope.hamburguerMenu = !$scope.hamburguerMenu;
    }
}]);