<?php
if(!verifySession()){
    header("Location:" . $base_url . "backoffice/");
}
$form=isset($_POST["image_desktop"]) && 
isset($_POST["image_mobile"]) && 
isset($_POST["highlight"]) &&
isset($_POST["title"]) &&
isset($_POST["text"]) &&
isset($_POST["link"]);

if($form){
    $image_desktop = $_POST["image_desktop"];
    $image_mobile = $_POST["image_mobile"];
    $highlight = $_POST["highlight"];
    $title = $_POST["title"];
    $text = $_POST["text"];
    $link = $_POST["link"];
    
    iduSQL("INSERT INTO carousel (image_desktop, image_mobile, highlight, title, text, link) VALUES ('$image_desktop', '$image_mobile', '$highlight', '$title', '$text', '$link')");
    header("Location:" . $base_url . "backoffice/carousel/1");
}
?>