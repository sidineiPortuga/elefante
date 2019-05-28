<section class="cadastroClientes">
    <div class="add-modal">
        <button id="modal-btn" ng-click="modal()"><i class="fas fa-plus"></i></button>

        <div class="modal" ng-class="{'active':modalView}">
            <div class="bg"ng-click="modal()"></div>
            <div class="modal-content">
                <button class="modal-content-close"ng-click="modal()"><i class="far fa-times-circle"></i></button>
                <form action="" class="modal-content-form">
                    <div class="modal-content-form-img"><img id="modal-content-form-img-user" src="./public/src/dev/img/user.svg" alt=""></div>
                    <input type="text" class="modal-content-form-input" placeholder="E-mail">
                    <input type="text" class="modal-content-form-input" placeholder="Cargo">
                    <button class="modal-content-form-btn" ng-click="copy()">Copiar Senha</button>
                    <button class="modal-content-form-btn" ng-click="registerUser()">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</section>