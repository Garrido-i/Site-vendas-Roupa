<?php
    require_once '../model/cliente.php';
    $objCliente = new Cliente();
?>
<DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="at.pont fr.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title> CRUD    |  CLIENTE</title>
</head>
<body>
    <div class="container">
        <h2>Cliente</h2>
        <table class="table table-striped">
            <thead>
                 <tr>
                    <th> Nome </th>
                    <th>Idade</th>
                    <th>Sexo</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $query = "SELECT * FROM `cliente`";
                $stmt = $objCliente ->runquery($query);
                $stmt->execute();
                if ($stmt->rowCount() > 0){
                    while($rowCliente = $stmt->fetch(PDO::FETCH_ASSOC)){                
            ?>
                        <tr>
                             <td><?php echo($rowCliente['nome']);?> </td>
                             <td><?php echo($rowCliente['idade']);?> </td>
                             <td><?php echo($rowCliente['sexo']);?></td></td>
                             <td> Editar</td>
                             <td>Deletar</td>
                        </tr>
            <?php
                 }
                    }
            ?>
            </tbody>
        </table>
    </div>    
</body>

</html
