<?php
if(!verifySession()){
    header("Location:" . $base_url . "backoffice/");
}
$form=isset($_POST["title"]) && 
isset($_POST["date"]) && 
isset($_POST["image"]) &&
isset($_POST["text"]);

if($form){
    $title = $_POST["title"];
    $date = $_POST["date"];
    $image = $_POST["image"];
    $text = $_POST["text"];
    
    iduSQL("INSERT INTO news (title, date, image, text) VALUES ('$title', '$date', '$image', '$text')");
    header("Location:" . $base_url . "backoffice/news_list/1");
}
?>