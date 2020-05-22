<?php
    session_start();
    require "../autoload.php";
    use App\Ticket;

    if($_POST){
        $id = $_POST['id'];        
        $titulo = $_POST['titulo'];        
        $descricao = $_POST['descricao'];        
        $status = $_POST['status'];        
        
        $ticket = new Ticket();
        $rs = $ticket->update($titulo, $descricao, $status, $id);
        
        if($rs){
            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Woohoo!</strong> Editado com sucesso!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>            
            ';
        }else{
            echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong> Oops!</strong> Tivemos um probleminha ao editar tente novamente mais tarde!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>            
            ';
        }
    }else{
        echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> Oops!</strong> Não foi informado os dados para editar!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>            
            ';
    }