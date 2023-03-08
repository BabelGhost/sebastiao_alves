<?php
if(!verifySession()){
    header("Location:" . $base_url . "backoffice/");
}
$form=isset($_POST["category"]) && 
isset($_POST["id_book"]);

if($form){
    $category = $_POST["category"];
    $id_book = $_POST["id_book"];
    
    iduSQL("INSERT INTO highlights (category, id_book) VALUES ('$category', '$id_book')");
    header("Location:" . $base_url . "backoffice/highlights_list/1");
}
?>