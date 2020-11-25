
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>CADASTRO</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="at.pont fr.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
    <nav class="navbar navbar-inverse"></nav>
        <div class=container>
          <div class="row">

           <?php

            $nome = $_POST ['txtnome'];
            $idade = $_POST ['txtidade'];
            $sexo = $_POST ['txtsexo'];
            
            
            echo (" Seus dados são : ".$nome.$idade.$sexo);
            ?>   
          </div>
        </div>
</body>
</html>        