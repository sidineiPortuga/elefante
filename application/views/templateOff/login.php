
<div class="bodylogin">
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
       <button class="btnlogin" ng-click="consultar()">LOGIN</button>
       <div class="check">
           <input id="remember" class="checkInput" type="checkbox"/> <i verificar="0" class="far fa-square checkbox"></i> <label for="remember">Remember me </label> <p>Forgot your password</p>
       </div>
       <div>
       <?php if($this->session->flashdata("success") ): ?>
            <p><?= $this->session->flashdata("success") ?></p>
        <?php endif ?>
        <?php if($this->session->flashdata("danger") ): ?>
            <p><?= $this->session->flashdata("danger") ?></p>
        <?php endif ?>
       </div>
  </form>
</div>


