<?php 
$books = getBooks();
$formDelete = isset($_POST["delete_id"]);
if($formDelete){
   $deleteId = intval($_POST["delete_id"]);
    deleteBook($deleteId);
    header("Location:".$base_url."backoffice/book_list/3");
    
}

?>
<main>
    <h3 class="page-title">Livros</h3>   
    <div class="content">
    <?php if(isset($path[2]) && $path[2]==1): ?>
                <h5 class="text-success">Adicionado com sucesso!</h5>
    <?php endif; ?>
    <?php if(isset($path[2]) && $path[2]==2): ?>
        <h5 class="text-success">Atualizado com sucesso!</h5>
    <?php endif; ?>
    <?php if(isset($path[2]) && $path[2]==3): ?>
        <h5 class="text-success">Apagado com sucesso!</h5>
    <?php endif; ?>
        <a href="<?=$base_url;?>backoffice/add_book" class="btn mb-3" style="margin-bottom: 10px">Adicionar</a>
       
        <table>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Imagem</th>
                <th>Acção</th>
            </tr>
            <?php foreach($books as $book): ?>
                <tr id="row-<?= $book["id"]; ?>">
                    <td><?= $book["id"]; ?></td>
                    <td><?= $book["name"]; ?></td>
                    <td><img src="<?= $book["image"]; ?>" class="table-image"></td>
                    <td>
                        <a href="<?=$base_url;?>backoffice/book/<?=$book["id"]?>">Editar</a><br>
        
                        <a href="#row-<?= $book["id"]; ?>"  id="erase-<?= $book["id"]; ?>" onclick="showDelete(<?= $book['id']; ?>)">Apagar</a>

                        <div id="delete-<?= $book["id"]; ?>" style="display: none;">
                            <p>Quer mesmo apagar?</p>
                            <form id="form_delete<?= $book["id"]; ?>" method="POST">
                                <input type="hidden" name="delete_id" value="<?= $book["id"]; ?>">
                                <a onclick="document.getElementById('form_delete<?= $book['id']; ?>').submit()" style="cursor:pointer; color:red; text-decoration: none; margin-right:5px">Sim
                                </a>
                                <a onclick="showErase(<?= $book['id']; ?>)" style="color:green;cursor:pointer">Não</a>
                            </form>
                        </div>
                
                    </td>
                </tr>
            
            <?php endforeach; ?>
        </table>  
     
    </div>
</main>
