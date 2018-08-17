<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Plusfm - Aqui é legal demais!</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="assets/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <link href="assets/img/favicon.png" rel="icon"/>

</head>
<body>
<nav role="navigation">
    <div class="nav-wrapper container">

        <div class="row hide-on-small-only">
            <div class="col s2">
                <a id="logo-container" href="#" class="brand-logo">
                    <img src="assets/img/logo.png"/>
                </a>
            </div>
            <div class="col s2 margin-vivo">
                <a class="vivo center">Ao vivo</a>
            </div>
            <div class="col s8 margin-menu">
                <ul class="right hide-on-med-and-down">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Quem Somos</a></li>
                    <li><a href="#">Drops da Plus</a></li>
                    <li><a href="#">Programação</a></li>
                    <li><a href="#">Promoções</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
        </div>

        <div class="row hide-on-med-and-up">
            <div class="col s6">
                <a class="logo-mobile">
                    <img src="assets/img/logo.png"/>
                </a>
            </div>
            <div class="col s3">
                <a class="vivo-mobile">Ao vivo</a>
            </div>
            <div class="col s3">
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
            <ul id="nav-mobile" class="sidenav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Quem Somos</a></li>
                <li><a href="#">Drops da Plus</a></li>
                <li><a href="#">Programação</a></li>
                <li><a href="#">Promoções</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </div>
    </div>
</nav>

<?php
    require 'slide.php';
?>