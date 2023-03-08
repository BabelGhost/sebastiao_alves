<?php

?>
<main>
    <h3 class="page-title">Novo Slide</h3>   
    <div class="content">
        <form action="<?=$base_url;?>backoffice/insert_slide" method="POST">
            <span class="page-subtitle">Imagem desktop</span>
            <input name="image_desktop" class="input-url" type="text" required="required">
            <a class="file_manager" href="../file_manager/tinyfilemanager.php" target="_blank">
                <span class="material-symbols-outlined">upload_file</span>
            </a><br>
            <span class="page-subtitle">Imagem mobile</span>
            <input name="image_mobile" class="input-url" type="text" required="required">
            <a class="file_manager" href="../file_manager/tinyfilemanager.php" target="_blank">
                <span class="material-symbols-outlined">upload_file</span>
            </a><br>
            <span class="page-subtitle">Highlight</span>
            <input name="highlight" class="input-url" type="text" ><br>
            <span class="page-subtitle">Titulo</span>
            <input name="title" class="input-url" type="text" ><br>
            <span class="page-subtitle">Texto</span><br>
            <textarea id="text_editor" name="text"></textarea><br>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#text_editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            <span class="page-subtitle">link saber mais</span>
            <input name="link" class="input-url" type="text" required="required"><br>
            <a class="btn" href="<?=$base_url;?>backoffice/carousel">
                Voltar
            </a>
            <input type="submit" class="btn">
            
        </form>
    </div>
</main>
