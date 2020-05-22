<?php
    session_start();
    require "../autoload.php";
    use App\Login;

    if($_POST){
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $login = new Login();
        $rs = $login->login($email, $senha);
        
        if($rs){
            $_SESSION['msg'] = "Login realizado com sucesso!";
        }else{
            $_SESSION['msg'] = "Dados inválidos!";
        }
        
        header("location: ../");

    }else{
        echo "Informe os dados para login";
    }