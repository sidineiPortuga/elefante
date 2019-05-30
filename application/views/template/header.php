<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Elefante</title>

    <link href="<?php echo base_url()?>public/src/dist/css/nav-page.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>public/src/dist/css/login.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>public/src/dist/css/UserPage.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>public/src/dist/css/ModalPage.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>public/src/dist/css/register.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>public/src/dev/scss/waves.min.css" />
    <link href="<?php echo base_url()?>/public/src/dist/css/nav.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>/public/src/dist/css/CardPage.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./public/src/dev/scss/waves.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    
    
</head>
<body>

<section class="navegacao" ng-controller="navCtrl">
    <div class="nav-header" ng-class="{'manipulateMenu':hamburguerMenu}">
        <div class="nav-header-title">
            Laravel        
            <button class="nav-header-btn  waves-effect" ng-click="hamburguer()"><i class="fas fa-bars"></i></button>

        </div>
        <div class="nav-header-opcoes">
            <span class="nav-header-opcoes-title ">Admin</span>
            <ul class="nav-header-opcoes-ul dark">

                <li class="nav-header-opcoes-ul-li"><button class="nav-header-opcoes-ul-li btn  waves-effect" ng-click="clickStyle()" ng-class="{'btn-effect': clickEffect}"><i class="far fa-flag "></i> Countries</button></li>

                <li class="nav-header-opcoes-ul-li"><button class="nav-header-opcoes-ul-li btn  waves-effect" ng-click="clickStyle()" ng-class="{'btn-effect': clickEffect}"><i class="fas fa-university"></i> Cities</button></li>

                <li class="nav-header-opcoes-ul-li"><button class="nav-header-opcoes-ul-li btn  waves-effect" ng-click="clickStyle()" ng-class="{'btn-effect': clickEffect}"><i class="fas fa-dollar-sign"></i> Currencies</button></li>

                <a href='<?php echo base_url();?>Login'><li class="nav-header-opcoes-ul-li"><button class="nav-header-opcoes-ul-li btn  waves-effect" ng-click="clickStyle()" ng-class="{'btn-effect': clickEffect}"><i class="fas fa-running"></i> Sair</button></li></a>

            </ul>
        </div>
    </div>
    
    <div class="body" ng-class="{'manipulateBody':hamburguerMenu}">
        <div class="nav-menu"><button class="nav-menu-icon  waves-effect" ng-click="hamburguer()"><i class="fas fa-bars"></i></button></div>