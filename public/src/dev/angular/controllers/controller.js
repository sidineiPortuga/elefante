// Controller
app.controller('appCtrl', ['$scope', function($scope) {
    $scope.modalView = false;

    $scope.modal = function(){
        $scope.modalView = !$scope.modalView;
    }
}]);
