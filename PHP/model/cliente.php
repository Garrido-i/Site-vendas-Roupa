<?php
    require_once 'db.php';

    class Cliente{
        private $conn;

        public function __construct(){
            $database = new Database();
            $db = $database->dbconnection();
            $this->conn = $db;
        }

        public function runQuery($sql){
            $stmt = $this->conn->prepare ($sql);
            return $stmt;
        }
        
        public function insert($nome,$idade,$sexo){
            try{
                $sql= "INSERT INTO cliente('nome','idade','sexo')
                        VALUES (:nome,:idade,:sexo )";
                $stmt= $this->conn->prepare($sql);
                $stmt->bindparam(":nome",$nome);
                $stmt->bindparam(":idade",$idade);
                $stmt->bindparam("sexo",$sexo);
                $stmt->execute();
                return $stmt;
            }catch (PDOException $e) {
                echo("Error:".$e->getMessage());
            }finally{
                $this->conn = null;
            }
        }

        public function updade($nome,$idade,$sexo,$id){
            try{
                $sql = "UPDATE cliente 
                        SET nome = :nome,
                        idade = :idade,
                        sexo = :sexo 
                        WHERE id = :id";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindparam(":nome",$nome);
                $stmt->bindparam(":idade",$idade);
                $stmt->bindparam(":sexo",$sexo);
                $stmt->bindparam(":id",$id);
                $stmt->execute();
                return $stmt;
            }catch(PDOException $e){
                echo("Erro ".$e->getMessage());            
            }finally{
                $this->conn = null;
            }
        }
        public function delete($id){
            try{
                $sql="DELETE FROM cliente where id= :id";
                $stmt=$this->conn->prepare ($sql);
                $stmt->bindparam(":id",$id);
                $stmt->execute();
                return $stmt;
           }catch(PODException $e){
                echo("Error".$e->getMessage());
            }finally{
               $this->conn = null;
            }
        }
        public function redirect ($url){
            header("Location": $url);
        }
    }

?>