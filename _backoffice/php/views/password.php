<?php

$username = $_SESSION["username"]["username"];
$user = selectSQLsingle("SELECT * FROM users WHERE username='$username'");
$hash = $user["password"];
$form = isset($_POST["old_password"]) && isset($_POST["new_password"])  && isset($_POST["new_password_repeat"]);

if($form){
    $old_pw = $_POST["old_password"];
    $new_pw = $_POST["new_password"];
    $new_pw_rp = $_POST["new_password_repeat"];
    if($new_pw==$new_pw_rp){
        if(password_verify($old_pw, $hash)){
            changePassword($old_pw,$new_pw);
            header("Location:" . $base_url . "backoffice/main/1");
        }
    }
}
?>
<main>
    <h3 class="page-title">Mudar Password</h3>   
    <div class="content">
        <form method="POST">
        <?php if($form): ?>

        <h5 class="text-danger">Password errada!</h5>

        <br>

        <?php endif; ?>

            <span class="page-subtitle">Password Antiga</span><br>
            <input name="old_password" class="input-url" type="text"><br>
           
            <span class="page-subtitle">Nova Password</span><br>
            <input name="new_password" class="input-url" type="text"><br>
            <span class="page-subtitle">Repetir Nova Password</span><br>
            <input name="new_password_repeat" class="input-url" type="text"><br>
                   
            <a class="btn" href="<?=$base_url;?>backoffice/">
                Voltar
            </a>
            <input type="submit" class="btn">
            
        </form>
    </div>
</main>
