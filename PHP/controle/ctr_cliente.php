<?php
    require_once '../model/cliente.php';
    $objCliente = new Cliente();

   if(isset($_GET['delete_id'])) {
       $id = $_GET['delete_id'];
       if($objCliente->delete($id)){
          $objCliente->redirect('../view/cliente.php');
        }
   }
   if(isset($_POST['insert'])){
       $nome = $_POST['txtnome'];
       $idade = $_POST['txtidade'];
       $sexo = $_POST['txtsexo'];
       if ($objCliente-> insert($nome,$idade,$sexo)){
            $objCliente->redirec('../view/cliente.php');
       }
   }

   if (isset($_POST['editar_id'])){
       $id=$_POST['editar_id'];
       $nome = $_POST['txtnome'];
       $idade = $_POST['txtidade'];
       $sexo = $_POST['txtsexo'];
       if($objCliente->updade($nome,$idade,$sexo,$id)){
           $objCliente->redirect('../view/cliente.php');
        }
   }
?>