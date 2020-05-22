<?php 
    namespace App;
    use App\Conexao;

    class Login
    {
        private static $pdo;        
        
        function __construct() {
            self::$pdo = Conexao::connection();             
        }

        function login(string $email, string $senha) {
            try {
                (String) $sql = "SELECT * FROM usuarios WHERE email=:email";
                $stmt = self::$pdo->prepare($sql);
                $stmt->bindValue(":email", $email, \PDO::PARAM_STR);
                $stmt->execute();

                $rs = $stmt->fetch(\PDO::FETCH_ASSOC);
                
                if($rs){                    
                    if (password_verify($senha, $rs['senha'])) {
                        session_start();
                        $_SESSION['login'] =        true;
                        $_SESSION['nome'] =         $rs['nome'];
                        $_SESSION['id'] =           $rs['id'];                        
                        
                        return true;         
                    }
                    return false;                    
                }
                die('EMAIL ERRADO');
                return false;               

            } catch (PDOException $ex) {
                throw $ex;
            }
        }
    }