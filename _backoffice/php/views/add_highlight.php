<?php

$books = getBooks();



?>
<main>
    <h3 class="page-title">Destaque</h3>   
    <div class="content">
        <form action="<?=$base_url;?>backoffice/insert_highlight" method="POST">
            <span class="page-subtitle">Categoria</span>
            <input name="category" class="input-url" type="text"><br>

            <span class="page-subtitle">Livro</span>
           
            <select name="id_book" class="input-url">
                <?php foreach($books as $book):?>
                    <option value="<?=$book["id"];?>">
                        <?=$book["name"];?>
                    </option>
                <?php endforeach;?>  
            </select>
            <br>

            
            
            <a class="btn" href="<?=$base_url;?>backoffice/highlights_list">
                Voltar
            </a>
            <input type="submit" class="btn">
            
        </form>
    </div>
</main>
