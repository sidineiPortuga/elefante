
<div class="register" ng-controller="registerCtrl">
    <div class="container_register">
        
        <div class="container_img">
                <img class="img_register" src="./public/src/dev/img/user.svg" alt="register icon">
        </div>

        <div class="register-back"><a href="<?php echo base_url()?>Login" class="register-back-a"><i class="fas fa-arrow-circle-left"></i></a></div>

        <form method="post">
                <div class="containerInput">
                        <span><img  class="icon_register" src="./public/src/dev/img/user.svg"/></span><input type="text" ng-model="name" placeholder="NOME"/>
                </div>
                <div class="containerInput">
                        <span><img  class="icon_register" src="./public/src/dev/img/user.svg"/></span><input type="text" ng-model="email" placeholder="E-MAIL"/>
                </div>
                <div class="containerInput">
                        <span><img class="icon_register" src="./public/src/dev/img/unlocked.svg"/></span><input type="password" ng-model="password" placeholder="SENHA"/>
                </div>
                <div class="containerInput">
                        <span><img class="icon_register" src="./public/src/dev/img/unlocked.svg"/></span><input type="password" ng-model="password_verify" placeholder="CONFIRMAÇÃO DE SENHA"/>
                </div>
                <button class="btn_register" ng-click="register()">Cadastrar</button>
        </form>
    </div> 
</div> 