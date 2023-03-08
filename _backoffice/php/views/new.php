<?php
$id = $path[2];
$new  = getNew($id);

$form = isset($_POST["image"]) && 
    isset($_POST["title"]) && 
    isset($_POST["date"]) && 
    isset($_POST["text"]);

if($form){
    setNew($id);
    header("Location: ../news_list/2");
}
?>
<main>
    <h3 class="page-title">Livro</h3>   
    <div class="content">
        <form method="POST">
            <img class="image-book" src="<?=$new[0]["image"];?>" alt=""><br>
            <span class="page-subtitle">Link Imagem</span>
            <input name="image" class="input-url" type="text" value="<?=$new[0]["image"];?>">
            <a class="file_manager" href="../../file_manager/tinyfilemanager.php" target="_blank">
                <span class="material-symbols-outlined">upload_file</span>
            </a><br>
            <span class="page-subtitle">Titulo</span>
            <input name="title" class="input-url" type="text" value="<?=$new[0]["title"];?>" required="required"><br>
            <span class="page-subtitle">Data</span>
            <input id="date-input" name="date" class="input-url" type="date" value="<?=$new[0]["date"];?>" required="required"><br>
            <span class="page-subtitle">Descrição</span><br>
            <textarea id="text_editor" name="text"><?=$new[0]["text"];?></textarea><br>
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
</main>
