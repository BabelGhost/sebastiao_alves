<?php
$id = $path[1];
$book  = getBook($id);


if(!$book){
    $book["name"]="Livro não encontrado";
    $book["text"]="Livro não encontrado";
    $book["image"]="#";
}

?>
    <main class="container-fluid" id="_scroll">
        <!--BEM VINDO-->
        <div  class="row border d-flex author-area" style="margin-left: 7%" >
            <div class="col-3 col-sm-auto">
                <div class="selected-title" style="margin-top: 50px;margin-left: 55px;">Livros</div>
                <div class="t1" style="margin-left: 55px;"><?= $book["name"];?></div>
            </div>
        </div>
        <!--AREA DESCRICAO LIVRO-->
        <div class="row">
            <div class="col p book" >
                <img class="float-start" style="margin-right: 5%; margin-bottom: 3%;" src="<?= $book["image"];?>" alt="Livro não encontrado">
                <p class="p"><?= $book["text"];?></p>
                  <br>
                  <div class="div text-end voltar-atras-mobile">
                    <button onclick="goBack();" class="back" style="margin-top: 85px;margin-bottom: 75px; width: 132px; height: 30px;"></button>
                  </div>
            </div>   
        </div>
        <script>
            window.onload = function() {
            document.getElementById("_scroll").scrollIntoView();
            };
        </script>
    </main>
   
    