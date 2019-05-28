
<script src="./public/src/dev/js/lib/jquery.js" type="javascript"></script> 
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
    })
</script>

      
		<script src="./public/src/dev/js/libs/angular.js"></script>
    		<script src="./public/src/dev/angular/module/module.js"></script>
    		<script src="./public/src/dev/angular/controllers/controller.js"></script>
	</body>
</html>