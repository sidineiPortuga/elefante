// Controller da pagina de login pega os valores em array e envia com ajax

app.controller('appCtrl', ['$scope','$http', function($scope, $http) {

    $scope.consultar = function(){
        let array = {user_email: $scope.login_email,user_pass: $scope.login_senha};
        
        $http.post('login/autenticar', array).then(function(data){
            let response = data.data;
            
            // IF PARA FAZER A VALIDAÇÃO
            if(response.success){   

            }
            else{
                alert(response.msg);
            }
        });
    }

}]);
