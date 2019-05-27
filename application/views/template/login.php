
<div class="containerLogin">
   <div class="containersvg">
        <img class="loginSvg" src="./public/src/dev/img/user.svg" alt="login icon">
   </div>

   <form>
       <div class="containerInput">
             <span><img  class="loginSvgInput" src="./public/src/dev/img/user.svg"/></span><input type="text" name="username" placeholder="USERNAME"/>
       </div>
       <div class="containerInput">
             <span><img class="loginSvgInput" src="./public/src/dev/img/unlocked.svg"/></span><input type="password" name="password" placeholder="PASSWORD"/>
      </div>
       <button class="btnlogin" type="submit">LOGIN</button>
       <div class="check">
           <input id="remember" class="checkInput" type="checkbox"/> <i verificar="0" class="far fa-square checkbox"></i> <label for="remember">Remember me </label> <p>Forgot your password</p>
       </div>
  </form>
</div>
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