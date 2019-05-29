

<header class="header">
        <form class="header-input-box">
            <input type="text" placeholder="Pesquise campanhas, listas, pessoas e mais..."/>
            <a class="search-btn" ><img src="./public/src/dev/img/search.svg"/></a>
        </form>
        <div class="header-profile-content">
            <div class="header-profile">
            </div>
            <i class="fa fa-caret-down"></i>
        </div>
</header>
<nav class="perfil-usuario">
    <h1>Perfil de usúario</h1>
    <hr>
    <ul class="perfil-usuario-breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Links usuários</a></li>
        <li><a href="#">Detalhes da Tabela</a></li>
        <li>Perfil de usuário</li>
    </ul>
</nav>
<section class="section-dashboard">
    <aside class="section-dashboard-aside">
        <div class="section-dashboard-aside-info">
        <h1>Informações</h1>
            <hr>
                <header>
                    <div class="profile-card">

                    </div>
                    <div class="info-box">
                         <div class="info-box-profile">
                              <h4>Lara Schmidt Silva</h4><span class="profile-online"></span>
                        </div>
                        <div class="info-box-bottom">
                        <span class="fa fa-mars"></span><p>Feminino</p>   <span class="fa fa-calendar"></span><p>27 anos</p>
                        </div>
                         
                    </div>
                </header>
                <a class="info-box-btn">Receita gerada: <span>R$1.1199,00</span></a>
                <div class="info-box-contacts">
                        <div class="info-box-contact-cotent">
                             <i class="fa fa-envelope"></i><p>laraschmidt@gmail.com</p>  
                        </div>
                        <div class="info-box-contact-cotent">
                             <i class="fa fa-phone"></i><p>11 96765-4312</p>  
                        </div>
                        <div class="info-box-contact-cotent">
                              <i class="fa fa-map-marker"></i><p>R. Dr Diogo Faria 775</p>  
                        </div>
                </div>
        </div>
        <div class="section-dashboard-aside-contact">
            <h1>Entrar em contato</h1>
            <hr>
            <div class="container-contato">
                <div class="container-items">
                    <div class="container-items-content">
                        <i class="fa fa-envelope"></i><p>Email</p>
                    </div>
                    <div class="container-items-content">
                        <i class="fa fa-sms"></i><p>SMS</p>
                    </div> 
                    <div class="container-items-content">
                        <i class="fa fa-bell"></i><p>Push</p>
                    </div>
                    <div class="container-items-content">
                        <span class="fa fa-microphone"></span><p>Voz</p>
                    </div>
                   
                </div>
                <p>Envie uma mensagem personalizada para este usuário</p>
            </div>
            
        </div>

        <div class="section-dashboard-aside-tags">
             <h1>Tags</h1>
             <div class="container-tags">
                 <div class="container-items-tags">
                     Default
                 </div>
                 <div class="container-items-tags">
                     Primary
                 </div>
                 <div class="container-items-tags">
                     Success
                 </div>
                 <div class="container-items-tags">
                     Info
                 </div>
                 <div class="container-items-tags">
                     Warning
                 </div>
                 <div class="container-items-tags">
                     Danger
                 </div>
             </div>
                <div class="add-container">
                <span class="fa fa-plus"></span><p>Adicionar</p>
                </div>
             

        </div>

   </aside>

         
   <div class="section-dashboard-aside-comments">
                            <h4>Comentários sobre o cliente</h4>
                            <hr>
                            <div class="comments-box">
                                <div class="profile-pic">

                                </div>
                                <div class="comments">
                                <h4>Renato</h4><span class="profile-online"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius </p>
                                </div>
                            

                            </div>
                            <div class="comments-box">
                                <div class="profile-pic">

                                </div>
                                <div class="comments">
                                <h4>Renato</h4><span class="profile-online"></span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius </p>
                                </div>
                            

                            </div>
                            <div class="add-comment">
                                    <span class="profile-pic"></span>
                                    <textarea class="input-text-area" placeholder="Adicionar comentário"></textarea>
                            </div>
                        
                        </div>

   <section class="chart-section">

       <div class="container-actions">
           <h1> Timeline de ações</h1> 

           <div class="container-actions-items">
          <div class="headerContainer"> <span class="container-actions-icon"><img class="flag-icon" src="public/src/dev/img/time.svg"/></span> <header>Atividades online <span class="container-actions-items-state-header">São Paulo/SP <img class="flag-icon" src="public/src/dev/img/brazil.svg"/> <img class="flag-icon" src="public/src/dev/img/google.svg"/> </span></header></div>
               <span class="container-actions-items-state-content"><img class="flag-icon" src="public/src/dev/img/cellphone.svg"/><p>{{ timelineAcoes.install }}</p> </span> 
               <span class="container-actions-items-state-content"><img class="flag-icon" src="public/src/dev/img/facebook.svg"/><p>{{ timelineAcoes.like }}</p> </span> 

           </div>
           <div class="container-actions-items">

           <div class="headerContainer"> <span class="container-actions-icon"><img class="flag-icon" src="public/src/dev/img/store.svg"/></span> <header>Atividades na loja<span class="container-actions-items-state-header">São Paulo/SP <img class="flag-icon" src="public/src/dev/img/brazil.svg"/> <img class="flag-icon" src="public/src/dev/img/google.svg"/> </span></header></div>
                <h5 >Segunda, 06 de outrubro</h5>
               <span class="container-actions-items-state-content"><img class="flag-icon" src="public/src/dev/img/login-actions.svg"/><p class="item-loja">{{ timelineAcoes.enter }}</p> </span> 
               <span class="container-actions-items-state-content"><img class="flag-icon" src="public/src/dev/img/logout-actions.svg"/><p class="item-loja">{{ timelineAcoes.exit }}</p> </span> 

        
           </div>

           <div class="container-actions-items">
           <div class="headerContainer"> <span class="container-actions-icon"><img class="flag-icon" src="public/src/dev/img/laptop.svg"/></span>   <header>Atividades no site<span class="container-actions-items-state-header">São Paulo/SP <img class="flag-icon" src="public/src/dev/img/brazil.svg"/><img class="flag-icon" src="public/src/dev/img/google.svg"/> </span></header></span></div>
               <h5>Segunda, 06 de outrubro</h5>

           </div>

       </div>
   
  </section> 

</section>

