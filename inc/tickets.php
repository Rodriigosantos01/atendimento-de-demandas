<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/autoload.php';
    use App\Ticket;
    $tickets = Ticket::selectAll();
?>
<table id="table-tickets" class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>Título</td>
            <td>Descrição</td>
            <td>Data de criação</td>
            <td>Status</td>
            <?php if(!empty($_SESSION['login'])): ?>
                <td>Ações</td>
            <?php endif;?>
        </tr>
    </thead>
    <tbody>
        <?php foreach($tickets as $ticket):?>
        <tr>
            <td><?= $ticket['titulo']?></td>
            <td><?= $ticket['descricao']?></td>
            <td><?= date("d/m/Y H:i:s", strtotime($ticket['data_cadastro']))?></td>
            <td><?= $ticket['descricaoStatus']?></td>                                    
            <?php if(!empty($_SESSION['login'])): ?>
                <td>
                    <button class="btn btn-warning" data-toggle="modal" data-target="#modalEditTicket" onclick="editarTicket('<?= base64_encode($ticket['id'])?>')">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="btn btn-danger" data-toggle="modal" data-target="#modalDelTicket" onclick="deleteTicket('<?= base64_encode($ticket['id'])?>')">
                        <i class="fas fa-trash-alt"></i>
                    </button>                                    
                </td>
            <?php endif;?>
        </tr>
        <?php endforeach;?>
    </tbody>

</table>
<?php if(empty($include)):?>
<script>
//Iniciar datatables versão Free
$(document).ready(function(){  
    $('#table-tickets').DataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Portuguese-Brasil.json"
        }
    });
}); 
</script>
<?php endif;?>