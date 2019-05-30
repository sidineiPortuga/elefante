app.controller('navCtrl', ['$scope', function($scope) { //CONFIGURAÇÃO DO MENU DE HAMBURGUER NA NAVBAR

    $scope.hamburguerMenu = false;

    $scope.hamburguer = function(){
        $scope.hamburguerMenu = !$scope.hamburguerMenu;
    }
}]);