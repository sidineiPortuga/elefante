
<div class="bodylogin" ng-controller="appCtrl">
    <div class="containerLogin">
        <div class="containersvg">
                <img class="loginSvg" src="./public/src/dev/img/user.svg" alt="login icon">
        </div>

   <form name="loginUser">
       <div class="containerInput">
             <span><img  class="loginSvgInput" src="./public/src/dev/img/user.svg"/></span><input type="text" ng-model="login_email" placeholder="USERNAME"/>
       </div>
       <div class="containerInput">
             <span><img class="loginSvgInput" src="./public/src/dev/img/unlocked.svg"/></span><input type="password" ng-model="login_senha" placeholder="PASSWORD"/>
      </div>
       <button class="btnlogin" ng-click="consultar()"><a href="<?php echo base_url()?>CardUser" class="container-btn">LOGIN</a></button>
       <button class="btnregister"><a href="<?php echo base_url()?>Register" class="container-btn">REGISTRE-SE</a></button>
       <div class="check">
           <input id="remember" class="checkInput" type="checkbox"/> <i verificar="0" class="far fa-square checkbox"></i> <label for="remember">Remember me </label> <p>Forgot your password</p>
       </div>
       <div>
       <div class="retorno"></div>
       </div>
  </form>