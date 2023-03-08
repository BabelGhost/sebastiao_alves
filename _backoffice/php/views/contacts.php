<?php

$form = 
isset($_POST["instagram"]) && 
isset($_POST["facebook"]) && 
isset($_POST["linkedin"]) && 
isset($_POST["phone"]) && 
isset($_POST["email"]) && 
isset($_POST["address"]) && 
isset($_POST["schedule"]) 
;

if($form){
    setContacts();
    header("Location:".$base_url."backoffice/main/1");
}

?>
<main>
    <h3 class="page-title">Contactos</h3>   
    <div class="content">
        <form method="POST">
    
            <span class="page-subtitle">Instagram</span>
            <input class="input-url" name="instagram" type="text" value="<?=getContacts("instagram");?>" required="required"><br>
            <span class="page-subtitle">Facebook</span>
            <input class="input-url" name="facebook" type="text" value="<?=getContacts("facebook");?>" required="required"><br>
            <span class="page-subtitle">LinkedIn</span>
            <input class="input-url" name="linkedin" type="text" value="<?=getContacts("linkedin");?>" required="required"><br>
            <span class="page-subtitle">Telefone</span>
            <input class="input-url" name="phone" type="text" value="<?=getContacts("phone");?>" required="required"><br>
            <span class="page-subtitle">E-mail</span>
            <input class="input-url" name="email" type="text" value="<?=getContacts("e-mail");?>" required="required"><br>
            <span class="page-subtitle">Morada</span>
            <input class="input-url" name="address" type="text" value="<?=getContacts("address");?>" required="required"><br>
            <span class="page-subtitle">Horário</span><br>
            <textarea id="text_editor" name="schedule"><?=getContacts("schedule");?></textarea><br>
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
