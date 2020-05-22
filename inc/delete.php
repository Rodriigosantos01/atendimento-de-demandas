<?php
    session_start();
    require "../autoload.php";
    use App\Ticket;

    if($_POST){
        $id = base64_decode($_POST['id_delete']);        
        
        $ticket = new Ticket();
        $rs = $ticket->delete($id);
        
        if($rs){
            echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong> Woohoo!</strong> Deletado com sucesso!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>            
            ';
        }else{
            echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong> Oops!</strong> Tivemos um probleminha ao deletar tente novamente mais tarde!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>            
            ';
        }
    }else{
        echo '
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong> Oops!</strong> Não foi informado os dados para deletar!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>            
            ';
    }