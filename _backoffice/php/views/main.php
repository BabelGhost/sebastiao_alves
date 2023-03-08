<?php
$last_login = getLastLogin($_SESSION["username"]["id"]);

?>

<main class="welcome-message content">
    <div class="row">
        <div class="col">
            <?php if(isset($path[2]) && $path[2]==1): ?>
                <h2 class="text-success">Atualizado com sucesso!</h2><br><br>
            <?php endif; ?>
            <h3 class="page-title">Bem vindo ao Backoffice do Sebastião Alves</h3>
            <p>Último acesso em: <?=$last_login["date"];?></p>
        </div>
    </div>
  

</main>
