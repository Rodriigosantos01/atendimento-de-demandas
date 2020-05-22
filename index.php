<?php 
    session_start();

    require "./autoload.php";
    use App\Ticket;

    $status = Ticket::selectStatus();
?>
<!doctype html>
<html lang="en">
<head>  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- Datatables CSS -->
    <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet"/>
    <style>
        body{
            background-color: #ccc;
        }    
    </style>
    <title>TICKETS - Home</title>
</head>
<body>
    <?php if(empty($_SESSION['login'])): ?>
    <div class="col-md-4 offset-md-4 border rounded mt-4">
        <form action="./inc/login.php" method="POST" class="formLogin" novalidate>
            <div class="col-12 form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email" maxlength="250" value="rodriigosantos01@gmail.com" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Por favor, digite seu email.</div>
            </div>
            <div class="col-12 form-group">
                <label for="senha">Senha:</label>
                <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" value="admin" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Por favor, digite sua senha.</div>
            </div>        
            <button type="submit" class="btn btn-primary btn-lg btn-block mb-4">Login</button>
        </form>
    </div>
    <?php endif;?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                        <?php if(!empty($_SESSION['login'])): ?>
                            <div class="col-md-4">
                                <b>Bem vindo! <?= $_SESSION['nome']?> </b> 
                            </div>                            
                            <div class="col-md-8 text-right">
                                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#modalNewTicket">Cadastrar ticket</a>
                                <a href="./inc/logout.php" class="btn btn-light">Sair</a>   
                            </div>                     
                        <?php endif;?>
                        </div>
                    </div>                    
                    <div id="msg" class="col-md-12 text-center">
                        <?php 
                            if(!empty($_SESSION['msg'])):
                        ?>
                        <div class="col-md-12 text-center">
                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                <strong> <?= $_SESSION['msg'] ?></strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                        </div>
                        <?php 
                            unset($_SESSION['msg']);
                            endif;
                        ?>
                    </div>
                    <?php if(!empty($_SESSION['login'])): ?>
                    <div class="col-md-12 mt-4 table-responsive" id="lista_tickets">
                        <?php 
                            $include = true;
                            include('./inc/tickets.php');
                        ?>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
    <?php require "./inc/modal.php"; ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Datatables JavaScript -->
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Font-Awesome JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    
    <!-- Scrips -->
    <script src="./js/script.js"></script>    
</body>
</html>