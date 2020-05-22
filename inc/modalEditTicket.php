<?php 
    require "../autoload.php";
    use App\Ticket;
    
    $id = base64_decode($_GET['id']);
    
    $ticket = new Ticket();
    $rs = $ticket->select($id);
    
    $status = Ticket::selectStatus();
?>
<div class="col-12 form-group">
    <label for="titulo">Titulo:</label>
    <input type="hidden" name="id" value="<?= $rs['id']?>">
    <input type="text" class="form-control" id="titulo" value="<?= $rs['titulo']?>" name="titulo" required>    
</div>
<div class="col-12 form-group">
    <label for="descricao">Descrição:</label>
    <input type="text" class="form-control" id="descricao" value="<?= $rs['descricao']?>" name="descricao" required>    
</div>
<div class="col-12 form-group">
    <label for="status">Status:</label>
    <select class="form-control" name="status" id="status">
        <?php foreach($status as $statu):?>
            <option <?= ($statu['id'] == $rs['status'])? 'selected':'';?> value="<?= $statu['id']?>"><?= $statu['descricao']?></option>
        <?php endforeach;?>
    </select>
</div>