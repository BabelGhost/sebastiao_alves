<?php

function getContacts($camp){
    $contacts = selectSQLsingle("SELECT * FROM contacts");
    switch($camp){
        case "phone":
            return $contacts["phone"];
        break;
        case "address":
            return $contacts["address"];
        break;
        case "e-mail":
            return $contacts["e_mail"];
        break;
        case "instagram":
            return $contacts["instagram"];
        break;
        case "facebook":
            return $contacts["facebook"];
        break;
        case "linkedin":
            return $contacts["linkedin"];
        break;
        case "schedule":
            return $contacts["schedule"];
        break;
    }
}

function getHome($camp){
    $home = selectSQLsingle("SELECT * FROM home");
    switch($camp){
        case "title":
            return $home["title"];
        break;
        case "text":
            return $home["text"];
        break;
        case "image":
            return $home["image"];
        break;
    }
}
function getNews(){
    $news = selectSQL("SELECT * FROM news ORDER BY date DESC");
    return $news;
}
function getNew($id){
    $new = selectSQL("SELECT * FROM news WHERE id=$id");
    return $new;
}


function getBooks(){
    $books = selectSQL("SELECT * FROM books");
    return $books;
}
function getBook($id){
    $book = selectSQLsingle("SELECT * FROM books WHERE id = $id");
    return $book;
}
function getAuthor($camp){
    $author = selectSQLsingle("SELECT * FROM author");
    switch($camp){
        case "image":
            return $author["image"];
        break;
        case "text":
            return $author["text"];
        break;
    }
}
function getHighlights(){
    $highlights = selectSQL("SELECT * FROM highlights");
    return $highlights;
}
function getCarousel(){
    $carousel = selectSQL("SELECT * FROM carousel");
    return $carousel;
}
function getSlide($id){
    $slide = selectSQL("SELECT * FROM carousel WHERE id = $id");
    return $slide;
}

?>
