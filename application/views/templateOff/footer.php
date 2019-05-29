
<<<<<<< HEAD
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>


<script src="./public/src/dev/js/libs/projeto.js"></script>
		<script src="./public/src/dev/js/libs/angular.js"></script>
    		<script src="./public/src/dev/angular/module/module.js"></script>
    		<script src="./public/src/dev/angular/controllers/controller.js"></script>
=======
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
        <script language="javascript">
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
            });
        </script>
        <script src="./public/src/dev/js/libs/angular.js"></script>
        <script src="./public/src/dev/angular/module/module.js"></script>
        <script src="./public/src/dev/angular/controllers/controller.js"></script>
>>>>>>> 902bdc4a8c485fc598465dc47e43f312aede878e
	</body>
</html>