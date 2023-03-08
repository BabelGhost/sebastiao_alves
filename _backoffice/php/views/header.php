<!--
    Autor: Tiago Silva
    Data criação: 20/02/2023
    Data Última Mod: 01/03/2023
-->
<?php
if(!verifySession()){
    header("Location:" . $base_url . "backoffice/");
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastião Alves - BO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$base_url;?>_backoffice/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

</head>
<body>
    <header>
        <nav>
            <a href="<?=$base_url?>backoffice/main" style="color:black; text-decoration:none"><h3 class="title-nav">Backoffice: <span>Sebastião Alves</span></h3></a>
            
            <div class="line"></div>
            <a class="nav-item " href="<?=$base_url;?>backoffice/home">Home</a>
            <a class="nav-item <?=($path[1] == "author") ? "selected" : "";?>" href="<?=$base_url;?>backoffice/author">Autor</a>
            <a class="nav-item <?=($path[1] == "book_list") ? "selected" : "";?>" href="<?=$base_url;?>backoffice/book_list">Livros</a>
            <a class="nav-item <?=($path[1] == "carousel") ? "selected" : "";?>" href="<?=$base_url;?>backoffice/carousel">Carrossel</a>
            <a class="nav-item <?=($path[1] == "contacts") ? "selected" : "";?>" href="<?=$base_url;?>backoffice/contacts">Contactos</a>
            <a class="nav-item <?=($path[1] == "highlights_list") ? "selected" : "";?>" href="<?=$base_url;?>backoffice/highlights_list">Destaques</a>
            <a class="nav-item <?=($path[1] == "news_list") ? "selected" : "";?>" href="<?=$base_url;?>backoffice/news_list">Imprensa</a>
            <a class="nav-item <?=($path[1] == "password") ? "selected" : "";?>" href="<?=$base_url;?>backoffice/password">Password</a>
            <a class="nav-item" href="<?=$base_url;?>backoffice/logoff">Sair</a>
        </nav>
    </header>
