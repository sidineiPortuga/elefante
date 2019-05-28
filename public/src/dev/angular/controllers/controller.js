// Controller
app.controller('appCtrl', ['$scope', function($scope) {  
    $scope.modalView = false;

    $scope.modal = function(){
        $scope.modalView = !$scope.modalView;
    }
        var friends = [
            {img:'img.jpg', name:'Peter'},
            {img:'img.jpg', name:'Peter'},
            {img:'img.jpg', name:'Peter'},
            {img:'img.jpg', name:'Peter'}
            
        ];
    $scope.reset = function() {
        $scope.friends = angular.copy(friends);
    };
    $scope.reset();
}]);