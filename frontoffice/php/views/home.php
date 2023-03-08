<?php

$highlights = getHighlights();

?>

<main class="container-fluid" id="_scroll">
        <!--BEM VINDO-->
        <div class="row welcome-area w-100">
            <div class="col-4 welcome-image" >
                <img style="box-shadow: 3px 3px 3px rgb(175 175 175);" src="<?=getHome('image');?>" alt="">
            </div>
            <div class="col text-welcome">
                <div class="t1" style="margin-top: 70px">Bem-vindo ao meu website</div>
                <div class="p text-welcome" style="margin-top: 30px;" >
                <?=getAuthor('text');?>
                </div>
                <div>
                    <a href="<?= $base_url;?>author" class="d-flex justify-content-end" style="margin-top: 40px;margin-right: 90px; margin-bottom: 30px;">
                        <button class="saber-mais-welcome " ></button>
                    </a>
                </div>
            </div>
        </div>
        <!--ÚLTIMOS LIVROS-->
        <div class="row last-books">
            <div class="col-auto t1 p-0" style="margin-top: 85px;">
                <?=getHome('title');?>
                <div class="p " style="margin-top: 23px; margin-bottom: 70px; text-transform:none">
               <?=getHome('text');?>
               </div>
            </div>
            
               
          
        </div>
        <!--highlightS-->
        <div class="row highlights-area">
                <?php foreach($highlights as $highlight): ?>
                    <?php
                        $id_book = $highlight["id_book"];
                        $selected_book = getBook($id_book);
                       
                    ?>
                    <div class="col-auto highlight p-0">
                        <img src="<?= $selected_book["image"]; ?>" class="highlight-image">
                        <div style="margin-left: 25px; margin-right: 25px;">
                            <div class="col highlight-title" style="margin-top:30px"><?= $selected_book["name"]; ?></div>
                            <div>
                                <div class="highlight-cat" ><?= $highlight["category"]; ?></div>
                                <div class="p text-card" style="<?=($highlight["category"] == "") ? "margin-top: 35px" : "margin-top: 10px";?>; margin-bottom: 15px;">
                                    <?= $selected_book["text"]; ?>
                                </div>
                                
                            </div>
                            <a href="<?= $base_url; ?>book/<?=$id_book?>" class="d-flex justify-content-end">
                                <button class="saber-mais-highlights"></button>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
               
        
        </div>
    </main>