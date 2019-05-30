
<div class="bodylogin">
    <div class="containerLogin">
        <div class="containersvg">
                <img class="loginSvg" src="./public/src/dev/img/user.svg" alt="login icon">
        </div>

   <form>
        <div class="containerInput">
            <span><img  class="loginSvgInput" src="./public/src/dev/img/user.svg"/></span><input type="text" ng-model="user_name" placeholder="USERNAME"/>
        </div>

        <div class="containerInput">
            <span><img class="loginSvgInput" src="./public/src/dev/img/unlocked.svg"/></span><input type="password" ng-model="user_pass" placeholder="PASSWORD"/>
        </div>
        
        <div class="btnlogin"><a href="<?php echo base_url()?>CardUser" class="container-btn">LOGIN</a></div>
        <div class="btnregister"><a href="<?php echo base_url()?>Register" class="container-btn">REGISTRAR</a></div>
        
        <div class="check">
            <input id="remember" class="checkInput" type="checkbox"/> <i verificar="0" class="far fa-square checkbox"></i> <label for="remember">Remember me </label> <p>Forgot your password</p>
        </div>
       
  </form>
</div>


