<?php
    class Database {
        private $username="root";
        private $pass = "";
        
        public $conn ;
        //função para Conectar no banco de dados 
        public function dbconnection (){
            $this->conn = null;
            try{
                $this->conn = new PDO('mysql:host=localhost;dbname=projeto',
                $this->username,$this->pass);
                echo ("Conectado!");

                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRRMODE_EXCEPTION);                
            }catch (PDOexception $e){
                echo $e->getMessage();
                echo ("Não conectado!");

            }

        }
    }
?>