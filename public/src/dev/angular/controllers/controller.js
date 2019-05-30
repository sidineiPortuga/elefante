// Controller

app.controller('appCtrl', ['$scope','$http', function($scope, $http) {

    //ABERTURA DO MODAL
    $scope.modalView = false;

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

    // TIMELINE
    $scope.timelineAcoes = {
        install:'Instalou o Aplicativo',
        like :'Curtiu a Página do Facebook',
        enter: 'Entrou na loja',
        exit :'Saiu da loja',
        date: new Date()
    };

    console.log($scope.timelineAcoes)


    // HTTP E SERVIÇOS AJAX 
    $scope.carregarContato = function(){
        let datas = {user_email: $scope.email, user_pass: $scope.password};

        $http.post("Register/create", datas).then(function(data){
            let response = data.data;
            
            if(response.sucess){
            }
            else{
                alert(response.msg);
            }
        })
    }
}]);
