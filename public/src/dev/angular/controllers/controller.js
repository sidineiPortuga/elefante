//CONTROLLER

app.controller('appCtrl', ['$scope', function($scope) {  

    //Efeito de Aparição do Modal
    $scope.modalView = false;

    $scope.modal = function(){
        $scope.modalView = !$scope.modalView;
    }

    // Ng-Repeat utiliza esse array temporariamente
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


    //Menu de Hamburguer, configuração

    $scope.hamburguerMenu = false;
    
    $scope.hamburguer = function(){
        console.log('Bolsonaro é um toários');
        $scope.hamburguerMenu = !$scope.hamburguerMenu;
    }

    // Mantendo o efeito do clique nas opções do Menu

    $scope.clickEffect = false;

    $scope.clickStyle = function(){

        
        if($scope.clickEffect == true ){        
            $scope.clickEffect = false;
        }else{
            $scope.clickEffect = !$scope.clickEffect;
        }
    }


    //Configuração do Chart na Pagina de User 

    
    /* $('.checkbox').click(function(){
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



    var ctx = document.getElementById('myChart').getContext('2d');
    Chart.defaults.global.responsive = false;
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['jan', 'feb', 'Mar', 'Apr', 'May', 'June', 'July', 'August', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3,12, 5, 3, 5, 2, 3],
                backgroundColor: [
                    '#fe9500',
                    '#fe9500',
                    '#fe9500',
                    '#fe9500',
                    '#fe9500',
                    '#fe9500',
                    '#fe9500',
                    '#fe9500',
                    '#fe9500',
                    '#fe9500',
                    '#fe9500',
                    '#fe9500'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    }); */
}]);
