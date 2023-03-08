<?php
if(!verifySession()){
    header("Location:" . $base_url . "backoffice/");
}
$form=isset($_POST["image"]) && isset($_POST["name"]) && isset($_POST["text"]);

if($form){
    $image = $_POST["image"];
    $name = $_POST["name"];
    $text = $_POST["text"];
    iduSQL("INSERT INTO books (name, image, text) VALUES ('$name', '$image', '$text')");
    header("Location:" . $base_url . "backoffice/book_list/1");
}
?>