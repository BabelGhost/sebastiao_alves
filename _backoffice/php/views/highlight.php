<?php
$id = $path[2];
$highlight  = getHighlight($id);

$books = getBooks();

$form = isset($_POST["category"]) && isset($_POST["id_book"]);

if($form){
    setHighlight($id);
}

?>
<main>
    <h3 class="page-title">Destaque</h3>   
    <div class="content">
        <form method="POST">
            <span class="page-subtitle">Categoria</span>
            <input name="category" class="input-url" type="text" value="<?=$highlight[0]["category"];?>"><br>

            <span class="page-subtitle">Livro</span>
           
            <select name="id_book" class="input-url">
                <?php foreach($books as $book):?>
                    <option value="<?=$book["id"];?>" <?php if ($book["id"] == $highlight[0]["id_book"]) echo "selected"; ?>>
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
