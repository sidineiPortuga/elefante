app.controller('UserPageCtrl', ['$scope','$http','$location', function($scope,$http, $location) {

    console.log('mano');

    $scope.get_data_ajax2 = function(){

        var url = new URL(window.location.href);
        var c = url.searchParams.get("id");
        let param = {
            id:c
        }

        $http.post('http://localhost/elefante/UserPage/getUser', param).then(function(response){
            console.log(response);
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