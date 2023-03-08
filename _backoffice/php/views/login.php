<?php

$form_login = isset($_POST["username"]) && isset($_POST["password"]);
if(verifySession()){
    header("Location:" . $base_url . "backoffice/main");
}
if($form_login){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if(doLogin($username, $password)){
        header("Location:" . $base_url . "backoffice/main");
    }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sebastião Alves - BO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$base_url;?>_backoffice/css/style.css">
    
</head>
<body>
    <header>
    </header>


    <main>
        <h3 class="page-title">Login</h3>   
        <div class="content">
            <form method="POST">
            <?php if($form_login): ?>

            <h5 class="text-danger">Login Inválido!</h5>

            <br>

            <?php endif; ?>
                <input name="username" type="text" placeholder="Username" autofocus><br><br>
                <input name="password" type="password" placeholder="Password"><br><br>
                <button class="btn">Entrar</button>
            </form>
        </div>
    </main>




    <footer>
        <p>Tiago Silva 2023 - Trabalho Final - CodeMaster</p>
    </footer>

  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="<?=$base_url;?>_backoffice/js/functions.js"></script>
<script src="<?=$base_url;?>_backoffice/js/main.js"></script>
</body>
</html>