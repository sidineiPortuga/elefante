
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
                        <span><img class="icon_register" src="./public/src/dev/img/user.svg"/></span><input type="number" ng-model="idade" placeholder="IDADE"/>
                </div>
                <div class="containerInput">
                        <span><img  class="icon_register" src="./public/src/dev/img/user.svg"/></span><input type="text" ng-model="email" placeholder="E-MAIL"/>
                </div>
                <div class="containerInput">
                        <span><img class="icon_register" src="./public/src/dev/img/user.svg"/></span><input type="text" ng-model="adress" placeholder="ENDEREÇO"/>
                </div>
                
                
                <div class="containerInput">
                        <span><img class="icon_register" src="./public/src/dev/img/user.svg"/></span><input type="text" ng-model="phone" placeholder="TELEFONE"/>
                </div>
                <div class="containerInput">
                        <span><img class="icon_register" src="./public/src/dev/img/unlocked.svg"/></span><input type="password" ng-model="password" placeholder="SENHA"/>
                </div>
                <div class="containerInput">
                        <span><img class="icon_register" src="./public/src/dev/img/unlocked.svg"/></span><input type="password" ng-model="password_verify" placeholder="CONFIRMAÇÃO DE SENHA"/>
                </div>
                <div class="radioInput">
                      <input type="radio" value="feminino" ng-model="genero"><label>Feminino</label>
                      <input type="radio" value="masculino" ng-model="genero"><label>Masculino</label>
                </div>
                <button class="btn_register" ng-click="register()">Cadastrar</button>
        </form>
        
        <div id="alert-div" ng-class="{'error-visible':error}">
                <span class="error-content" ><button class="error-content-close" ng-click="errorClose()"><i class="far fa-times-circle"></i></button></span>
                <p id="alert-div-message">{{message}}</p>
        </div>
    </div> 
</div> 