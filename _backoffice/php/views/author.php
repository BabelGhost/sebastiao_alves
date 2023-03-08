<?php

$form = isset($_POST["image"]) && isset($_POST["text"]);

if($form){
    setAuthor();
    header("Location:".$base_url."backoffice/main/1");
}

?>
<main>
    <h3 class="page-title">Autor</h3>   
    <div class="content">
        <form method="POST" onsubmit="return checkText()" id="form">
    
            <img class="image-author" src="<?=getAuthor("image");?>" alt=""><br>
            <span class="page-subtitle">Imagem</span>
            <input class="input-url" name="image" type="text" value="<?=getAuthor("image");?>" required="required">
            <a class="file_manager" href="../file_manager/tinyfilemanager.php" target="_blank">
                <span class="material-symbols-outlined">upload_file</span>
            </a>
            <br>
            <span class="page-subtitle">Texto</span><br>
            <textarea id="text_editor" name="text"><?=getAuthor("text");?></textarea><br>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#text_editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
             <a class="btn" href="<?=$base_url;?>backoffice/main">
                Cancelar
            </a>
            <input type="submit" class="btn">
        </form>
    </div>
</main>
