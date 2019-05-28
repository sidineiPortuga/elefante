// Controller
app.controller('appCtrl', ['$scope', function($scope) {  
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