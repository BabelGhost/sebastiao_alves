<?php
require_once("frontoffice/php/database/database.php");
require_once("frontoffice/php/functions/functions.php");


$base_url = "http://localhost/sebastiao_alves/";
$full_url = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];



$path = str_replace($base_url, "", $full_url);
$path = explode("/", $path);

switch ($path[0]) {
    case "": require_once("frontoffice/php/models/home_model.php"); break;
    case "author": require_once("frontoffice/php/models/author_model.php"); break;
    case "book": require_once("frontoffice/php/models/book_model.php"); break;
    case "contacts": require_once("frontoffice/php/models/contacts_model.php"); break;
    case "news": require_once("frontoffice/php/models/news_model.php"); break;
    case "backoffice":
        require_once("_backoffice/php/functions/functions.php"); 
        switch((isset($path[1])) ? $path[1] : ""){
            case "": require_once("_backoffice/php/views/login.php"); break;
            case "main": require_once("_backoffice/php/models/main_model.php"); break;
            case "home": require_once("_backoffice/php/models/home_model.php"); break;
            case "author": require_once("_backoffice/php/models/author_model.php"); break;
            case "book_list": require_once("_backoffice/php/models/book_list_model.php"); break;
            case "book": require_once("_backoffice/php/models/book_model.php"); break;
            case "carousel": require_once("_backoffice/php/models/carousel_model.php"); break;
            case "slide": require_once("_backoffice/php/models/slide_model.php"); break;
            case "contacts": require_once("_backoffice/php/models/contacts_model.php");; break;
            case "highlights_list": require_once("_backoffice/php/models/highlights_list_model.php"); break;
            case "highlight": require_once("_backoffice/php/models/highlight_model.php"); break;
            case "password": require_once("_backoffice/php/models/password_model.php"); break;
            case "news_list": require_once("_backoffice/php/models/news_list_model.php"); break;
            case "new": require_once("_backoffice/php/models/new_model.php"); break;
            case "add_book": require_once("_backoffice/php/models/add_book_model.php"); break;
            case "add_slide": require_once("_backoffice/php/models/add_slide_model.php"); break;
            case "add_new": require_once("_backoffice/php/models/add_new_model.php"); break;
            case "add_highlight": require_once("_backoffice/php/models/add_highlight_model.php"); break;
            case "insert_slide": require_once("_backoffice/php/functions/insert_slide.php"); break;
            case "insert_book": require_once("_backoffice/php/functions/insert_book.php"); break;
            case "insert_new": require_once("_backoffice/php/functions/insert_new.php"); break;
            case "insert_highlight": require_once("_backoffice/php/functions/insert_highlight.php"); break;
            case "logoff": require_once("_backoffice/php/functions/logoff.php"); break;
            default: echo "404"; break;
        }
        break;

    //404
    default: echo "404"; break;

}
   

?>