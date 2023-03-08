<?php

?>
<main>
    <h3 class="page-title">Nova Noticia</h3>   
    <div class="content">
        <form action="<?=$base_url;?>backoffice/insert_new" method="POST">
            <span class="page-subtitle">Link Imagem</span>
            <input name="image" class="input-url" type="text" >
            <a class="file_manager" href="../file_manager/tinyfilemanager.php" target="_blank">
                <span class="material-symbols-outlined">upload_file</span>
            </a><br>
            <span class="page-subtitle">Titulo</span>
            <input name="title" class="input-url" type="text" required="required"><br>
            <span class="page-subtitle">Data</span>
            <input id="date-input" name="date" class="input-url" type="date" required="required"><br>
            <span class="page-subtitle">Descrição</span><br>
            <textarea id="text_editor" name="text"></textarea><br>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#text_editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            <a class="btn" href="<?=$base_url;?>backoffice/news_list">
                Voltar
            </a>
            <input type="submit" class="btn">
            
        </form>
    </div>
    <script>
        let current_date = new Date();

        let y = current_date.getFullYear();
        let m = String(current_date.getMonth() + 1).padStart(2, '0');
        let d = String(current_date.getDate()).padStart(2, '0');

        document.getElementById('date-input').value = `${y}-${m}-${d}`;

    </script>
</main>
