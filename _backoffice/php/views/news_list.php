<?php 
$news= getNews();
//Paginação
$elements_page = 4;
$page_number = 1;

if(isset($_POST["page_number"])){
    $page_number = intval($_POST["page_number"]);
}

if(isset($_POST["elements_page"])){
    $elements_page = intval($_POST["elements_page"]);
}

$total_pages = ceil(count($news) / $elements_page);
$current_page = array_slice($news, ($page_number-1)*$elements_page, $elements_page);

$start = $page_number - 2;
$end = $start + 5;

//Forms
$formDelete = isset($_POST["delete_id"]);
if($formDelete){
   $deleteId = intval($_POST["delete_id"]);
    deleteNew($deleteId); 
    header("Location:".$base_url."backoffice/news_list/3");
}
?>
<main>
    <h3 class="page-title">Imprensa</h3>   
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
        <a href="<?=$base_url;?>backoffice/add_new" class="btn mb-3" style="margin-bottom: 10px">Adicionar</a>
    
        <table>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Date</th>
                <th>Image</th>
                <th>Acção</th>
            </tr>
            <?php foreach($current_page as $new): ?>
                <tr id="row-<?= $new["id"]; ?>">
                    <td><?= $new["id"]; ?></td>
                    <td style="font-size: 10px"><?= $new["title"]; ?></td>
                    <td><?= $new["date"]; ?></td>
                    <td><img src="<?= $new["image"]; ?>" class="table-image"></td>
                    <td>
                        <a href="#" onclick="location.replace('<?= $base_url?>backoffice/new/<?= $new['id']?>')">Editar</a>   
                        
                        
                        <a href="#row-<?= $new["id"]; ?>" id="erase-<?= $new["id"]; ?>" onclick="showDelete(<?= $new['id']; ?>)">Apagar</a>
                        
                        <div id="delete-<?= $new["id"]; ?>" style="display: none;">

                            <p>Quer mesmo apagar?</p>
                            <form id="form_delete<?= $new["id"]; ?>" method="POST">    
                                <input type="hidden" name="delete_id" value="<?= $new["id"]; ?>">
                                    <a onclick="document.getElementById('form_delete<?=$new['id'];?>').submit()" style="cursor:pointer; color:red; text-decoration: none; margin-right:5px">Sim
                                </a>
                                <a onclick="showErase(<?= $new['id']; ?>)" style="color:green;cursor:pointer">Não</a>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>  
         <!--PAGINAÇÃO-->
         <form method="POST">
            <div class="row" style="margin-top: 90px; margin-bottom: 90px;">
                <div class="col d-flex justify-content-center align-items-streetch">
                <button type="submit" class="arrow-left <?= ($page_number != 1) ? "functional" : ""; ?>" name="page_number" value="<?= $page_number-1 ?>" <?= ($page_number == 1) ? "disabled" : ""; ?>></button>
                    <?php for($i=$start; $i<$end; $i++): ?>
                        <?php if($i >= 1 && $i <= $total_pages): ?>
                            <input type="submit" class="page-number <?= ($page_number == $i) ? "pag-selected" : ""; ?>" name="page_number" value="<?= $i ?>">
                        <?php endif; ?>
                    <?php endfor; ?>
                <button type="submit" class="arrow-right <?= ($page_number != $total_pages) ? "functional" : ""; ?>" name="page_number" value="<?= $page_number+1 ?>" <?= ($page_number == $total_pages) ? "disabled" : ""; ?>></button>

                </div>
            
            </div>
        </form>
    </div>
</main>
