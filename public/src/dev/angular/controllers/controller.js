// Controller

app.controller('appCtrl', ['$scope', function($scope) {

    //ABERTURA DO MODAL
    $scope.modalView = false;
    $scope.timelineAcoes = {
        install:'Instalou o Aplicativo',
        like :'Curtiu a Página do Facebook',
        enter: 'Entrou na loja',
        exit :'Saiu da loja',
        date: new Date()
    };

    console.log($scope.timelineAcoes)
    $scope.modal = function(){
        $scope.modalView = !$scope.modalView;
    }


    //REPEAT DO CARD
    var friends = [
        {img:'img.jpg', name:'Peter'},
        {img:'img.jpg', name:'Peter'},
        {img:'img.jpg', name:'Peter'},
        {img:'img.jpg', name:'Peter'},
        {img:'img.jpg', name:'Peter'},
        {img:'img.jpg', name:'Peter'},
        {img:'img.jpg', name:'Peter'}
    ];

    $scope.reset = function() {
        $scope.friends = angular.copy(friends);
    }     
    $scope.reset();
    
    //MENU HAMBURGUER
    $scope.hamburguerMenu = false;

    $scope.hamburguer = function(){
        $scope.hamburguerMenu = !$scope.hamburguerMenu;
    }
}]);
