// CONTROLLER DA PAGINA DE LOGIN - 

app.controller('loginCtrl', ['$scope','$http', function($scope, $http) {
    $scope.login_email = "";
    $scope.login_senha = "";
    $scope.consultar = function(){

        let datas = {
            user_email: $scope.login_email, 
            user_pass: $scope.login_senha
        };

        
        $http.post("login/login", datas).then(function(response){
            var status = response.data;
            console.log(status);
            if(status.success){
                $('#retorno').html(status.msg);
                window.location.href = 'http://localhost/elefante/CardPage';
            }else{
                $('#retorno').html(status.msg);
            }
        })


    }


    $scope.error = false;

    $scope.errorClose = function(){
        $scope.error = !$scope.error;
    }
}]);