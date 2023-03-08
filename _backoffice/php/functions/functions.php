<?php
function getHighlight($id){
    $highlight = selectSQL("SELECT * FROM highlights WHERE id=$id");
    return $highlight;
}
function getLastLogin($id_user){
    $last_login = selectSQL("SELECT date FROM login_historic WHERE id_user=$id_user ORDER BY date DESC");
    
    return $last_login[1];
 
}
function setAuthor(){
    $image= $_POST["image"];
    $text= $_POST["text"];

    iduSQL("UPDATE author SET image = '$image', text = '$text' WHERE id=1");

}
function setContacts(){
    $instagram= $_POST["instagram"];
    $facebook= $_POST["facebook"];
    $linkedin= $_POST["linkedin"];
    $phone= $_POST["phone"];
    $email= $_POST["email"];
    $schedule= $_POST["schedule"];
    $address= $_POST["address"];
    
    iduSQL("UPDATE contacts SET instagram = '$instagram', facebook='$facebook', linkedin= '$linkedin', phone='$phone', e_mail='$email', schedule='$schedule', address='$address' WHERE id=1");
    
    
}
function setBook($id){
    $image = $_POST["image"];
    $name = $_POST["name"];
    $text = $_POST["text"];

    iduSQL("UPDATE books SET name = '$name', image='$image', text= '$text' WHERE id=$id");
    header("Location:".$base_url."backoffice/book_list/2");
}
function setNew($id){
   $image = $_POST["image"];
   $title = $_POST["title"];
   $date = $_POST["date"];
   $text = $_POST["text"];

    iduSQL("UPDATE news SET image='$image', title = '$title', date = '$date', text= '$text' WHERE id=$id");

}
function setSlide($id){
    $image_desktop = $_POST["image_desktop"];
    $image_mobile = $_POST["image_mobile"];
    $highlight = $_POST["highlight"];
    $title = $_POST["title"];
    $text = $_POST["text"];
    $link = $_POST["link"];

    iduSQL("UPDATE carousel SET image_desktop = '$image_desktop', image_mobile = '$image_mobile', highlight = '$highlight', title = '$title',  text = '$text' , link = '$link'  WHERE id=$id");
}
function setHome(){
    $title = $_POST["title"];
    $text = $_POST["text"];
    $image = $_POST["image"];

    iduSQL("UPDATE home SET title = '$title', text='$text',image='$image' WHERE id=1");
    
}
function setHighlight($id){
    $category = $_POST["category"];
    $id_book = $_POST["id_book"];

    iduSQL("UPDATE highlights SET category = '$category', id_book = '$id_book' WHERE id=$id");
    header("Location: ../highlights_list/2");

}
function deleteBook($id){
    iduSQL("DELETE FROM books WHERE id = $id");
    header("Location:".$base_url."backoffice/book_list/3");
}
function deleteSlide($id){
    iduSQL("DELETE FROM carousel WHERE id = $id");
}
function deleteNew($id){
    iduSQL("DELETE FROM news WHERE id = $id");
}
function deleteHighlight($id){
    iduSQL("DELETE FROM highlights WHERE id = $id");
}
function doLogin($username, $password){
    $user = selectSQLsingle("SELECT * FROM users WHERE username='$username'");
    if(!empty($user)){
        $hash = $user["password"];
        if(password_verify($password, $hash)){
            session_start();
            $_SESSION["username"] = $user;
            newAccess($user["id"]);
            return true;
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}
function verifySession(){
    session_start();
    return isset($_SESSION["username"]);
}
function changePassword($old_password, $new_password){
    $username = $_SESSION["username"]["username"];
    $user = selectSQLsingle("SELECT * FROM users WHERE username='$username'");
    $hash = $user["password"];
    $new_hash = password_hash($new_password, PASSWORD_DEFAULT);
    $id=$user["id"];

    iduSQL("UPDATE users SET `password` = '$new_hash' WHERE id='$id'");
}
function newAccess($id_user){
    date_default_timezone_set("Europe/Lisbon");
    $date = date("H:i:s - d/m/Y");

    iduSQL("INSERT INTO login_historic (id_user,date) VALUES ('$id_user', '$date')");
}
function createUser($username, $password){
    $hash = password_hash($password, PASSWORD_DEFAULT);
    iduSQL("INSERT INTO users (username, password) VALUES ('$username', '$hash')");
    return true;
}

?>
