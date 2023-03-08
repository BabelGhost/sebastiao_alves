<?php
$id = $path[2];
$book  = getBook($id);

$form = isset($_POST["image"]) && isset($_POST["name"]) && isset($_POST["text"]);

if($form){
    setBook($id);
    header("Location: ../book_list/2");
}

?>
<main>
    <h3 class="page-title">Livro</h3>   
    <div class="content">
        <form method="POST" onsubmit="return checkText()" id="form">
            <span class="page-subtitle">Imagem</span><br>
            <img class="image-book" src="<?=$book["image"];?>" alt=""><br>
            <span class="page-subtitle">Imagem</span>
            <input class="input-url" name="image" type="text" value="<?=$book["image"];?>" required="required">
            <a class="file_manager" href="../../file_manager/tinyfilemanager.php" target="_blank">
                <span class="material-symbols-outlined">upload_file</span>
            </a><br>
            <span class="page-subtitle">Titulo</span>
            <input class="input-url" name="name" type="text" value="<?=$book["name"];?>" required="required"><br>
            <span class="page-subtitle">Descrição</span><br>
            <textarea id="text_editor" name="text"><?=$book["text"];?></textarea><br>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#text_editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            <a class="btn" href="<?=$base_url;?>backoffice/book_list">
                Voltar
            </a>
            <input type="submit" class="btn">
            
        </form>
    </div>
</main>
