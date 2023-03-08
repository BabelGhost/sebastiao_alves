<!--
    Autor: Tiago Silva
    Início: 08/01/2023
    Ultima Mod: 01/03/2023
-->
<?php

$books=getBooks();
$carousel = getCarousel();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastião Alves</title>
    <!--  CSS BOOTSTRAP  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <!--  CSS LOCAL  -->
    <link rel="stylesheet" href="<?=$base_url;?>frontoffice/css/style.css">

    
</head>
<body>
    <header class="container-fluid">
        <!--NAV-->
        <div class="row">
            <div class="col-12 position-absolute top-0 z-1">
                <div class="col-12 text-center">
                    <div id="open-books" class="titulo">sebastião alves</div>
                </div>
                <div class="col-auto">
                    <div class="line mx-auto"></div>
                </div>
                <div class="col-12 d-flex justify-content-around nav-mobile">
                    <nav class="navbar navbar-expand-sm py-0">
                        <div class="container-fluid z-2 justify-content-end nav-collapse">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <div onclick="changeIcon()" class="navbar-icon" ></div>
                            </button>
                        </div>
                        <div class="container-fluid z-2 justify-content-end nav-collapse">
                        
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                    <a class="nav-link menus selected" aria-current="page" href="<?=$base_url;?>">Home</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link menus <?=($path[0] == "author") ? "selected" : "";?>" href="<?=$base_url;?>author">Autor</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                    <a id="menu-dropdown" class="nav-link menus <?=($path[0] == "book") ? "selected" : "";?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Livros
                                    </a>
                                    <ul class="dropdown-menu rounded-0 py-4">
                                        <?php for($i=0; $i<count($books); $i++):?>
                                            <li><a class="dropdown-item submenu" href="<?=$base_url;?>book/<?=$books[$i]["id"]?>"><?= $books[$i]["name"]; ?></a></li>
                                        <?php endfor;?>
                                    </ul>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link menus <?=($path[0] == "news") ? "selected" : "";?>" href="<?=$base_url;?>news">Imprensa</a>
                                    </li>
                                    <li class="nav-item">
                                    <a class="nav-link menus <?=($path[0] == "contacts") ? "selected" : "";?>" href="<?=$base_url;?>contacts">Contactos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav> 
                </div>
            </div>
            <!--CARROSEL DESKTOP-->
            <div class="col-12 px-0 carousel-desktop">
                <div id="carouselIndicatorsDesktop" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators gap-3">
                        <?php for($i=0; $i<count($carousel); $i++):?>
                        <button style="width: 20px; height: 20px; background-color: rgba(0, 0, 0, 0);" type="button" data-bs-target="#carouselIndicatorsDesktop" data-bs-slide-to="<?=$i;?>" class="<?= ($i == 0) ? "active" : ""; ?>" <?= ($i == 0) ? "aria-current='true'" : ""; ?> aria-label="Slide <?=($i+1);?>"></button>
                        <?php endfor;?> 
                    </div>
                    
                    <div class="carousel-inner">
                        <?php for($i=0; $i<count($carousel); $i++):?>
                        <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
                            <img src="<?=$carousel[$i]["image_desktop"];?>" class="d-block w-100" alt="...">
                            <div class="col-5 carousel-caption ">
                                <div class="highlight-cat" ><?=$carousel[$i]["highlight"];?></div>
                                <div class="head-title"><?=$carousel[$i]["title"];?></div>
                                <div class="text-carousel p" style=" "><?=$carousel[$i]["text"];?></div>
                                <br>
                                <a href="<?=$carousel[$i]["link"];?>" class="saber-mais-banner text-start p-0">
                                    <button class="saber-mais-banner "></button>
                                </a>
                            </div>
                        </div>
                        <?php endfor;?> 
                    </div>             
                </div>
            </div>  
        </div>



         <!--CARROSEL MOBILE-->
        <div class="col-12 px-0 carousel-mobile">
            <div id="carouselIndicatorsMobile" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators gap-3">
                    <?php for($i=0; $i<count($carousel); $i++):?>
                        <button style="width: 20px; height: 20px; background-color: rgba(0, 0, 0, 0);" type="button" data-bs-target="#carouselIndicatorsMobile" data-bs-slide-to="<?=$i;?>" class="<?= ($i == 0) ? "active" : ""; ?>" <?= ($i == 0) ? "aria-current='true'" : ""; ?> aria-label="Slide <?=($i+1);?>"></button>
                    <?php endfor;?> 
                </div>
                
                <div class="carousel-inner ">
                    <?php for($i=0; $i<count($carousel); $i++):?>
                        <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?> ">
                            <img src="<?=$carousel[$i]["image_mobile"];?>" class="d-block w-100" alt="...">
                            <div class="col carousel-caption">
                                <div class="highlight-cat" ><?=$carousel[$i]["highlight"];?></div>
                                <div class="head-title"><?=$carousel[$i]["title"];?></div>
                                <div class="text-carousel p"><?=$carousel[$i]["text"];?></div>
                                <br>
                                <a href="<?=$carousel[$i]["link"];?>#" class="saber-mais-banner text-start p-0">
                                    <img src="<?=$base_url;?>images/desktop/svg/sabermais1.svg" class="saber-mais-banner " alt="">
                                </a>
                            </div>
                        </div>
                    <?php endfor;?> 
                </div>             
            </div>
        </div>  
    </div>
    </header>