// Controller

// app.controller('appCtrl', ['$scope','$http', function($scope, $http) {

//     //ABERTURA DO MODAL
//     $scope.modalView = false;
//     $scope.timelineAcoes = {
//         install:'Instalou o Aplicativo',
//         like :'Curtiu a Página do Facebook',
//         enter: 'Entrou na loja',
//         exit :'Saiu da loja',
//         date: ' 29/05/2019'
//     };

//     console.log($scope.timelineAcoes)
//     $scope.modal = function(){
//         $scope.modalView = !$scope.modalView;
//     }


//     //MENU HAMBURGUER
//     $scope.hamburguerMenu = false;

//     $scope.hamburguer = function(){
//         $scope.hamburguerMenu = !$scope.hamburguerMenu;
//     }

// //Get
// $scope.get_data_ajax = function()
// {
//     $http({
//         method: 'GET',
//         url: 'http://localhost/elefante/CardUser/getUser'
//       }).then(function successCallback(response) {
//                  $scope.users = response.data ;
//                 //  console.log($scope.users)
//               $scope.userJson =  JSON.stringify($scope.users);
              
//         }, function errorCallback(response) {
//          console.log('errooooooooooooo')
//         });
// }

// $scope.get_data_ajax();
//     //

// }]);
