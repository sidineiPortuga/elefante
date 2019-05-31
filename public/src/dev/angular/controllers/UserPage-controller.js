app.controller('UserPageCtrl', ['$scope','$http','$location', function($scope,$http, $location) {

    // $scope.trocarIcone = function(){
    //     var genero = $('.user-genero').html();
    //     if(genero == 'feminino'){
    //         $('.genero').removeClass('fa-mars').addClass('fa-venus');
    //     }else{
    //         $('.genero').removeClass('fa-venus').addClass('fa-mars');
    //     }
    // }
 

    setTimeout(function(){    $scope.trocarIcone(); }, 1000);

    $scope.trocarIcone = function(){
      
     var genero =   document.querySelector('.user-genero').innerHTML;
        if(genero == 'feminino '){
            document.querySelector('.generoIcon').classList.remove('fa-mars');
            document.querySelector('.generoIcon').classList.add('fa-venus');
        }
    }
 

    console.log('ahahhahaha');


    $scope.users ={
        user_name:'teste'
    };

    $scope.get_data_ajax2 = function(){

        var url = new URL(window.location.href);
        var c = url.searchParams.get("id");
        let param = {
            id:c
        }

        $http.post('http://localhost/elefante/Userpage/getUser', param).then(function(response){
            console.log(response);
            $scope.users = response.data.user;

        })
        // $http({
        //     method: 'GET',
        //     url: 'http://localhost/elefante/UserPage/getUser'
        // }).then(function successCallback(response) {
        //     // $scope.users = response.data ;
        //     console.log(response);
        //     // console.log(response.data)
        // }, function errorCallback(response) {
        //     console.log('errooooooooooooo')
        // });
    }

    $scope.get_data_ajax2();

}]);