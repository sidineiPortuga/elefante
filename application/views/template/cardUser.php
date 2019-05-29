<section class="modal" ng-class="{'active':modalView}">
    <div class="bg" ng-click="modal()"></div>
    <div class="modal-content">
        <button class="modal-content-close"ng-click="modal()"><i class="far fa-times-circle"></i></button>
        <form action="" class="modal-content-form">
            <div class="modal-content-form-img"><img id="modal-content-form-img-user" src="./public/src/dev/img/user.svg" alt=""></div>
            <input type="text" class="modal-content-form-input" placeholder="E-mail">
            <input type="text" class="modal-content-form-input" placeholder="Cargo">
            <button class="modal-content-form-btn waves-effect" ng-click="copy()">Copiar Senha</button>
            <button class="modal-content-form-btn waves-effect" ng-click="registerUser()">Cadastrar</button>
        </form>
    </div>
</section>

<section class="card-user">
    <div class="grid">
        <div class="user-content" ng-click="modal()">
            <div class="card plus-user waves-effect">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        

        <!-- Cards com Usuários, já -->
        <div class="user-content" ng-repeat="friend in friends">
            <div class="card">
                <ul class="column-nowrap">
                    <li class="img-card">
                        <div>
                            <img src='./public/src/dev/img/{{friend.img}}' alt="">
                        </div>
                        <div>
                            <h3>{{friend.name}}</h3>
                        </div>
                    </li>
                    <li class="auxiliary-text">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus porro molestias neque ut quam non fuga accusantium quidem doloremque maxime harum quas, qui ipsa aperiam, sed blanditiis est omnis nobis.
                    </p>
                    </li>
                    <li class="flex-end">
                        <button class="view_user waves-effect">Ver</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>