
<div class="bodylogin" ng-controller="loginCtrl">
    <div class="containerLogin">
        <div class="containersvg">
            <img class="loginSvg" src="./public/src/dev/img/user.svg" alt="login icon">
        </div>
        <?php
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
            echo $_SESSION['success'];
        }
        if(isset($_SESSION['success'])){
            echo 'sessao startada';
        }else{
            echo 'sessao não startada';
        }
        ?>
        <form method="post">
            <div class="containerInput">
                    <span><img  class="loginSvgInput" src="./public/src/dev/img/user.svg"/></span><input type="text" ng-model="login_email" placeholder="USERNAME"/>
            </div>
            <div class="containerInput">
                    <span><img class="loginSvgInput" src="./public/src/dev/img/unlocked.svg"/></span><input type="password" ng-model="login_senha" placeholder="PASSWORD"/>
            </div>
            <button class="btnlogin" ng-click="consultar()">LOGIN</button>
            <button class="btnregister"><a href="<?php echo base_url()?>Register" class="container-btn">REGISTRE-SE</a></button>
            <div class="check">
                <input id="remember" class="checkInput" type="checkbox"/> <i verificar="0" class="far fa-square checkbox"></i> <label for="remember"><?= $this->session->flashdata('success') ?></label> <p>Forgot your password</p>
            </div>
                <div id="retorno"></div>
                <h3><?php  ?></h3>
        </form>
    </div> 
</div> 