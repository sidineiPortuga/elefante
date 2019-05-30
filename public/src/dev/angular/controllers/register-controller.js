// CONTROLLER DA PAGINA DE REGISTRO - CRIA ARRAY COM DADOS PEGOS DA PAGINA DE REGISTRO E PASSA COM AJAX PARA O CONTROLLER REGISTER E UTILIZA MÉTODO

app.controller('registerCtrl', ['$scope','$http', function($scope, $http) {
        $scope.alertRegister =  document.getElementById('alert-div');

    $scope.register = function(){
        let datas = {user_name: $scope.name, user_email: $scope.email, user_pass: $scope.password, user_pass_verify: $scope.password_verify};

        $http.post("Register/create", datas).then(function(data){
            let response = data.data;
            
            // IF PARA FAZER A VALIDAÇÃO
            if(response.success){   
                alert(response.msg);
                window.location.href = 'http://localhost/elefante/CardUser';
            }
            else{
                return $scope.message = response.msg;
            }
        })
    }


    $scope.error = false;

    $scope.errorClose = function(){
        $scope.error = !$scope.error;
    }
}]);