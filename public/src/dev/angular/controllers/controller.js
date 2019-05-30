// Controller

app.controller('appCtrl', ['$scope','$http', function($scope, $http) {

    //ABERTURA DO MODAL
    $scope.modalView = false;
    $scope.timelineAcoes = {
        install:'Instalou o Aplicativo',
        like :'Curtiu a Página do Facebook',
        enter: 'Entrou na loja',
        exit :'Saiu da loja',
        date: ' 29/05/2019'
    };

    // console.log($scope.timelineAcoes)
    $scope.modal = function(){
        $scope.modalView = !$scope.modalView;
    }

    $scope.consultar = function($data){
        let array = {user_email: $scope.login_email, user_pass: $scope.login_senha};
        $http.post('Login/autenticar', array).then(function(data){
            $location.path('/cardUser');
        });
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

  
    
    //MENU HAMBURGUER
    $scope.hamburguerMenu = false;

    $scope.hamburguer = function(){
        $scope.hamburguerMenu = !$scope.hamburguerMenu;
    }


$scope.get_data_ajax = function()
{
    $http({
        method: 'GET',
        url: 'http://localhost/elefante/CardUser/getUser'
      }).then(function successCallback(response) {
                 $scope.users = response.data ;
                 console.log($scope.users)
              $scope.userJson =  JSON.stringify($scope.users);
              
        }, function errorCallback(response) {
         console.log('errooooooooooooo')
        });
}

$scope.get_data_ajax();
    //

}]);
