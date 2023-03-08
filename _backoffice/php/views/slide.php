<?php
$id = $path[2];
$slide  = getSlide($id);

$form = isset($_POST["image_desktop"]) && 
    isset($_POST["image_mobile"]) && 
    isset($_POST["highlight"]) && 
    isset($_POST["title"]) &&  
    isset($_POST["text"]) && 
    isset($_POST["link"]) ;

if($form){
    setSlide($id);
    header("Location: ../carousel/2");
}
?>
<main>
    <h3 class="page-title">Slide</h3>   
    <div class="content">
        <form method="POST">
            <span class="page-subtitle">Imagem desktop</span><br>
            <img class="image-book" src="<?=$slide[0]["image_desktop"];?>" alt=""><br>
            <span class="page-subtitle">Link Desktop</span>
            <input name="image_desktop" class="input-url" type="text" value="<?=$slide[0]["image_desktop"];?>" required="required">
            <a class="file_manager" href="../../file_manager/tinyfilemanager.php" target="_blank">
                <span class="material-symbols-outlined">upload_file</span>
            </a><br>
            <span class="page-subtitle">Imagem mobile</span><br>
            <img class="image-book" src="<?=$slide[0]["image_mobile"];?>" alt=""><br>
            <span class="page-subtitle">Link Mobile</span>
            <input name="image_mobile" class="input-url" type="text" value="<?=$slide[0]["image_mobile"];?>" required="required">
            <a class="file_manager" href="../../file_manager/tinyfilemanager.php" target="_blank">
                <span class="material-symbols-outlined">upload_file</span>
            </a><br>
            <span class="page-subtitle">Highlight</span>
            <input name="highlight" class="input-url" type="text" value="<?=$slide[0]["highlight"];?>"><br>
            <span class="page-subtitle">Titulo</span>
            <input name="title" class="input-url" type="text" value="<?=$slide[0]["title"];?>"><br>
            <span class="page-subtitle">Texto</span><br>
            <textarea id="text_editor" name="text"><?=$slide[0]["text"];?></textarea><br>
            <script>
                ClassicEditor
                    .create( document.querySelector( '#text_editor' ) )
                    .catch( error => {
                        console.error( error );
                    } );
            </script>
            <span class="page-subtitle">link saber mais</span>
            <input name="link" class="input-url" type="text" value="<?=$slide[0]["link"];?>"><br>
            <a class="btn" href="<?=$base_url;?>backoffice/carousel">
                Voltar
            </a>
            <input type="submit" class="btn">
            
        </form>
    </div>
</main>
