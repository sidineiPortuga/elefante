// Controller
app.controller('appCtrl', ['$scope', function($scope) {
    $scope.modalView = false;
    $scope.timelineAcoes = {
        install:'Instalou o Aplicativo',
        like :'Curtiu a Página do Facebook',
        enter: 'Entrou na loja',
        exit :'Saiu da loja',
        date: new Date()
    };

    console.log($scope.timelineAcoes)
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

$('.checkbox').click(function(){
    var verificar = $(this).attr('verificar');
    if(verificar == 0){
        $('.checkbox').removeClass('fa-square').addClass('fa-check-square');
        $('.checkbox').attr('verificar', 1);
        $("#remember").click();
    }else{
        $('.checkbox').removeClass('fa-check-square').addClass('fa-square');
        $('.checkbox').attr('verificar', 0);
        $("#remember").click();
    }
})




