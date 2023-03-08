<?php

$form = 
isset($_POST["title"]) && isset($_POST["text"])&& isset($_POST["image"]);

if($form){
    setHome();
    header("Location:".$base_url."backoffice/main/1");
}

?>
<main>
    <h3 class="page-title">Home</h3>   
    <div class="content">
        <form method="POST">
            <img class="image-author" src="<?=getHome("image");?>" alt=""><br>
            <span class="page-subtitle">Imagem</span>
            <input class="input-url" name="image" type="text" value="<?=getHome("image");?>">
            <a class="file_manager" href="../file_manager/tinyfilemanager.php" target="_blank">
                <span class="material-symbols-outlined">upload_file</span>
            </a>
            <br>
            <span class="page-subtitle">Titulo</span>
            <input name="title" class="input-url" type="text" value="<?=getHome("title");?>"><br>
            <span class="page-subtitle">Texto</span><br>
            <textarea id="text_editor" name= "text"><?=getHome("text");?></textarea><br>
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

