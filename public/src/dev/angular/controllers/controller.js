// Controller
app.controller('appCtrl', ['$scope', function($scope) {  

    //Efeito de Aparição do Modal
    $scope.modalView = false;

    $scope.modal = function(){
        $scope.modalView = !$scope.modalView;
    }

    // Ng-Repeat utiliza esse array temporariamente
    var friends = [
        {img:'img.jpg', name:'Peter'},
        {img:'img.jpg', name:'Peter'},
        {img:'img.jpg', name:'Peter'},
        {img:'img.jpg', name:'Peter'}
        
    ];


    $scope.reset = function() {
        $scope.friends = angular.copy(friends);
    };
    $scope.reset();


    //Menu de Hamburguer, configuração

    $scope.hamburguerMenu = false;
    
    $scope.hamburguer = function(){
        console.log('Bolsonaro é um toários');
        $scope.hamburguerMenu = !$scope.hamburguerMenu;
    }

    // Mantendo o efeito do clique nas opções do Menu

    $scope.clickEffect = false;

    $scope.clickStyle = function(){

        
        if($scope.clickEffect == true ){        
            $scope.clickEffect = false;
        }else{
            $scope.clickEffect = !$scope.clickEffect;
        }
    }

}]);