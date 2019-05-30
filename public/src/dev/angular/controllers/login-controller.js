// CONTROLLER PARA O LOGIN

app.controller('loginCtrl', ['$scope','$http', function($scope, $http) {

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
            console.log('Err')
            });
    }

    $scope.get_data_ajax();

}]);
