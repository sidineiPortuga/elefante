
<div class="register">
    <div class="container_register">
        
        <div class="container_img">
                <img class="img_register" src="./public/src/dev/img/user.svg" alt="register icon">
        </div>

    <form method="post">
        <div class="containerInput">
                <span><img  class="icon_register" src="./public/src/dev/img/user.svg"/></span><input type="text" ng-model="email" placeholder="E-MAIL"/>
        </div>
        <div class="containerInput">
                <span><img class="icon_register" src="./public/src/dev/img/unlocked.svg"/></span><input type="password" ng-model="password" placeholder="PASSWORD"/>
        </div>
        <button class="btn_register" ng-click="carregarContato()">Cadastrar</button>

    </form>
    </div> 
</div> 