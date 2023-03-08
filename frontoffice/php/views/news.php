<?php

$news  = getNews();

$elements_page = 2;
$page_number = 1;

if(isset($_POST["page_number"])){
    $page_number = intval($_POST["page_number"]);
}

if(isset($_POST["elements_page"])){
    $elements_page = intval($_POST["elements_page"]);
}

$total_pages = ceil(count($news) / $elements_page);
$current_page = array_slice($news, ($page_number-1)*$elements_page, $elements_page);

$start = $page_number - 2;
$end = $start + 5;
?>
    <main class="container-fluid" id="_scroll">
        <!--BEM VINDO-->
        <div class="row border d-flex author-area" style="margin-left: 7%">
            <div class="col">
                <div class="selected-title" style="margin-top: 50px;margin-left: 55px;">Imprensa</div>
                <div class="t1" style="margin-left: 55px;">Últimas noticias</div>
            </div>
        </div>
        <!--NOTICIA-->
        <?php foreach($current_page as $new): ?>
        <div class="row new-header" >
            <div class="col">
                <div class="t1"><?=$new["title"]?></div>
                <div class="line-news"></div>
                <div class="pub-date">Publicado a <?=$new["date"]?></div>
            </div>
        </div>
        <div class="row new">
            <div class="col p">
                <img class="w-100" src="<?=$new["image"]?>" alt="">
                <br><br><br><br>
                <?=$new["text"]?>
            </div>
        </div>
        <?php endforeach;?>
        
        <!--PAGINAÇÃO-->
        <form method="POST">
            <div class="row" style="margin-top: 90px; margin-bottom: 90px;">
                <div class="col d-flex justify-content-center align-items-streetch">
                <button type="submit" class="arrow-left <?= ($page_number != 1) ? "functional" : ""; ?>" name="page_number" value="<?= $page_number-1 ?>" <?= ($page_number == 1) ? "disabled" : ""; ?>></button>
                    <?php for($i=$start; $i<$end; $i++): ?>
                        <?php if($i >= 1 && $i <= $total_pages): ?>
                            <input type="submit" class="page-number <?= ($page_number == $i) ? "pag-selected" : ""; ?>" name="page_number" value="<?= $i ?>">
                        <?php endif; ?>
                    <?php endfor; ?>
                <button type="submit" class="arrow-right <?= ($page_number != $total_pages) ? "functional" : ""; ?>" name="page_number" value="<?= $page_number+1 ?>" <?= ($page_number == $total_pages) ? "disabled" : ""; ?>></button>

                </div>
            
            </div>
        </form>
    </main>
    <script>
        window.onload = function() {
        document.getElementById("_scroll").scrollIntoView();
        };
    </script>
