<?php 
    namespace App;
    use App\Conexao;
    @session_start();

    class Ticket
    {
        private static $pdo;  
        
        function __construct()
        {
            self::$pdo = Conexao::connection();   
        }

        static function selectAll()
        {
            try {
                self::$pdo = Conexao::connection();
                (String) $sql = "SELECT a.id, a.titulo, a.descricao, a.data_cadastro, b.descricao as descricaoStatus
                FROM tickets as a 
                LEFT JOIN status_tickets as b ON b.id = a.status
                WHERE status != 4";
                $stmt = self::$pdo->prepare($sql);
                $stmt->execute();

                $rs = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $rs;

            } catch (PDOException $ex) {
                throw $ex;
            }
        }

        static function select($id)
        {
            try {
                self::$pdo = Conexao::connection();
                (String) $sql = "SELECT * FROM tickets WHERE id=:id";
                $stmt = self::$pdo->prepare($sql);
                $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
                $stmt->execute();

                $rs = $stmt->fetch(\PDO::FETCH_ASSOC);
                return $rs;

            } catch (PDOException $ex) {
                throw $ex;
            }
        }

        function insert($titulo, $descricao)
        {
            try {
                (String) $sql = "INSERT INTO tickets (titulo, descricao) VALUES (:titulo, :descricao)";
                $stmt = self::$pdo->prepare($sql);
                $stmt->bindValue(":titulo", $titulo, \PDO::PARAM_STR);
                $stmt->bindValue(":descricao", $descricao, \PDO::PARAM_STR);
                
                $rs = $stmt->execute();                
                return $rs;
            } catch (PDOException $ex) {
                throw $ex;
            }
        }

        static function selectStatus()
        {
            try {
                self::$pdo = Conexao::connection();
                (String) $sql = "SELECT * FROM status_tickets";
                $stmt = self::$pdo->prepare($sql);
                $stmt->execute();

                $rs = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                return $rs;

            } catch (PDOException $ex) {
                throw $ex;
            }
        }

        function update($titulo, $descricao, $status, $id)
        {
            try {
                (String) $sql = "UPDATE tickets SET titulo=:titulo, descricao=:descricao, status=:status WHERE id=:id";
                $stmt = self::$pdo->prepare($sql);
                $stmt->bindValue(":titulo", $titulo, \PDO::PARAM_STR);
                $stmt->bindValue(":descricao", $descricao, \PDO::PARAM_STR);
                $stmt->bindValue(":status", $status, \PDO::PARAM_INT);
                $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
                $rs = $stmt->execute();                
                return $rs;
            } catch (PDOException $ex) {
                throw $ex;
            }
        }

        function delete(int $id)
        {
            try {
                (String) $sql = "UPDATE tickets set status=:status WHERE id=:id";
                $stmt = self::$pdo->prepare($sql);
                $stmt->bindValue(":status", '4', \PDO::PARAM_STR);                
                $stmt->bindValue(":id", $id, \PDO::PARAM_INT);
                $stmt->execute();                
                return $stmt;
            } catch (PDOException $ex) {
                throw $ex;
            }
        }
    }