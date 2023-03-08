<?php 
$carousel = getCarousel();
$formDelete = isset($_POST["delete_id"]);
if($formDelete){
   $deleteId = intval($_POST["delete_id"]);
    deleteSlide($deleteId);   
    header("Location:".$base_url."backoffice/carousel/3");
}
?>
<main>
    <h3 class="page-title">Carrossel</h3>   
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
        <a href="<?=$base_url;?>backoffice/add_slide" class="btn mb-3" style="margin-bottom: 10px">Adicionar</a>
       
        <table>
            <tr>
                <th>ID</th>
                <th>Imagem Desktop</th>
                <th>Imagem mobile</th>
                <th>Acção</th>
            </tr>

            <?php foreach($carousel as $slide): ?>
                <tr id="row-<?= $slide["id"]; ?>">
                    <td><?= $slide["id"]; ?></td>
                    <td><img src="<?= $slide["image_desktop"]; ?>" class="table-image"></td>
                    <td><img src="<?= $slide["image_mobile"]; ?>" class="table-image"></td>
                    <td>
                    <a href="#" onclick="location.replace('<?= $base_url?>backoffice/slide/<?= $slide['id']?>')">Editar</a>                        
                        <a href="#row-<?= $slide["id"]; ?>" id="erase-<?= $slide["id"]; ?>" onclick="showDelete(<?= $slide['id']; ?>)">Apagar</a>
                        <div id="delete-<?= $slide["id"]; ?>" style="display: none;">
                            <p>Quer mesmo apagar?</p>
                            <form id="form_delete<?= $slide["id"]; ?>" method="POST">
                                <input type="hidden" name="delete_id" value="<?= $slide["id"]; ?>">
                                <a onclick="document.getElementById('form_delete<?= $slide['id']; ?>').submit()" style="cursor:pointer; color:red; text-decoration: none; margin-right:5px">Sim
                                </a>
                                <a onclick="showErase(<?= $slide['id']; ?>)" style="color:green;cursor:pointer">Não</a>
                            </form>
                        </div>
                </tr>
            
            <?php endforeach; ?>
        </table>  
    
    </div>
</main>
