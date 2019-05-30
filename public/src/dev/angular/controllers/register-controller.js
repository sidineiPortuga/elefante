// CONTROLLER DA PAGINA DE REGISTRO - CRIA ARRAY COM DADOS PEGOS DA PAGINA DE REGISTRO E PASSA COM AJAX PARA O CONTROLLER REGISTER E UTILIZA MÉTODO

app.controller('registerCtrl', ['$scope','$http', function($scope, $http) {

    $scope.register = function(){
        let datas = {user_name: $scope.name, user_email: $scope.email, user_pass: $scope.password, user_pass_verify: scope.pass_verify};

        $http.post("Register/create", datas).then(function(data){
            let response = data.data;
            
            // IF PARA FAZER A VALIDAÇÃO
            if(response.success){   

            }
            else{
                alert(response.msg);
            }
        })
    }

}]);