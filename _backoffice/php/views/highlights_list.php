<?php 
$highlights = getHighlights();
$formDelete = isset($_POST["delete_id"]);
if($formDelete){
   $deleteId = intval($_POST["delete_id"]);
    deleteHighlight($deleteId);
    header("Location:".$base_url."backoffice/highlights_list/3");
    
}

?>
<main>
    <h3 class="page-title">Destaques</h3>   
    <div class="content">
        <?php if(count($highlights)<3): ?>
            <a href="<?=$base_url;?>backoffice/add_highlight" class="btn mb-3" style="margin-bottom: 10px">Adicionar</a>
        <?php endif; ?>
        <?php if(isset($path[2]) && $path[2]==1): ?>
            <h5 class="text-success">Adicionado com sucesso!</h5>
        <?php endif; ?>
        <?php if(isset($path[2]) && $path[2]==2): ?>
            <h5 class="text-success">Atualizado com sucesso!</h5>
        <?php endif; ?>
        <?php if(isset($path[2]) && $path[2]==3): ?>
            <h5 class="text-success">Apagado com sucesso!</h5>
        <?php endif; ?>
       
        <table>
            <tr>
                <th>Categoria</th>
                <th>Livro</th>
                <th>Acção</th>
            </tr>
            <?php foreach($highlights as $highlight): ?>
                <?php
                        $id_book = $highlight["id_book"];
                        $selected_book = getBook($id_book);
                ?>
                <tr id="row-<?= $id_book; ?>">
                    <td><?= $highlight["category"]; ?></td>
                    <td><img src="<?= $selected_book["image"]; ?>" class="table-image"></td>
                    <td>
                        <a href="<?=$base_url;?>backoffice/highlight/<?=$highlight["id"]?>">Editar</a><br>

                        <a href="#row-<?= $id_book; ?>" id="erase-<?= $highlight["id"]; ?>" onclick="showDelete(<?= $highlight['id']; ?>)">Apagar</a>

                        <div id="delete-<?= $highlight["id"]; ?>" style="display: none;">
                            <p>Quer mesmo apagar?</p>
                            <form id="form_delete<?= $highlight["id"]; ?>" method="POST">
                                <input type="hidden" name="delete_id" value="<?= $highlight["id"]; ?>">
                                <a onclick="document.getElementById('form_delete<?= $highlight['id']; ?>').submit()" style="cursor:pointer; color:red; text-decoration: none; margin-right:5px">Sim
                                </a>
                                <a onclick="showErase(<?= $highlight['id']; ?>)" style="color:green;cursor:pointer">Não</a>
                            </form>
                        </div>
                    
                    </td>
                </tr>
            
            <?php endforeach; ?>
        </table>  
       
    </div>
</main>
