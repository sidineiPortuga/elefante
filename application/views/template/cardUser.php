
<section class="card-user">
    <div class="grid">
        <div class="user-content">
            <div class="card plus-user waves-effect">
                <i class="fas fa-plus"></i>
            </div>
        </div>
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
                        asdsadasdasdasdasdasdadadasdasdas
                        asdasdadadadadadadasdasdasdasdadas
                        sdadadsasdasdadadasdasddasdadadada
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
<style>
/*Conheça o hotel*/

.card-user {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 100px 50px;
    background: #fff;
}
.card-user h3 {
    font-size: 1.5rem;
    margin-bottom: 35px;
    color: #7d7d7d;
    text-align: center;
}
.card-user p {
    max-width: 800px;
    margin-bottom: 35px;
    color: #191c03;
    text-align: center;
}
.card-user hr {
    width: 200px;
    height: 2px;
    background-color:  #191c03;
    margin-bottom: 70px;
    border: none;
}
.card-user .grid {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
}
.card-user .grid div.user-content {
    width: 20%;
}
.card-user .grid div.user-content {
    height: 428px;
    background-clip: content-box;
    background-size: cover;
    background-position: center;
    background-color: white;
    padding: 0px 1%;
    margin-bottom: 2%;
    border-radius: 11px;
}
.card {
    box-shadow: 0px 0px 5px rgba(51, 51, 51, 0.35);
    width: 100%;
    height: 100%;
    border-radius: 3px;
    transform:translateY(0px);
    transition: all .2s;
}
.card:hover {
    transform: translateY(-10px);
    box-shadow: 0px 0px 16px #929292;
}
.card ul {
    display: flex;
    height: 100%;
    flex-direction: column;
    justify-content: space-between;
}
.card ul li {
    list-style: none;
    justify-content: center;
    display: flex;
    flex-direction: column;
    align-items: center;
}
li.img-card img {
    padding: 23px;
    width: 150px;
    height: 150px;
    border-radius: 50%;
}
.card ul li p {
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    direction: ltr;
    width: 100%;
}

.auxiliary-text p {
    padding: 0px 50px;
    font-size: 1.2rem;
    font-weight: 600;
    color: #7d7d7d; 
}

li.img-card div {
    flex-direction: column;
}
button.view_user {
    border: none;
    padding: 4% 26%;
    font-size: 1.3rem;
    font-weight: 600;
    color: #f3f3f3;
    margin-bottom: 12%;
    border-radius: 4px;
    background: #909090;
    box-shadow: 0px 0px 7px #a0a0a0;
    cursor: pointer;
    transition: 0.2s;
}
button.view_user:hover:active:focus {
    background: #545454;
    transition: 0.2s;
}
.plus-user {
    align-items: center;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
    cursor: pointer;
}
.plus-user i {
    font-size: 4rem;
    color: #a9a9a9;
}
@media(max-width:1200px){
    .card-user .grid div.user-content {
        width: 50%;
    }
}
@media(max-width:800px){
    .card-user .grid div.user-content {
        width: 100%;
    }
}
</style>