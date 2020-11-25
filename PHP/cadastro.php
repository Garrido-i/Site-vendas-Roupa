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
                <div class="col">
                    <h1> BEM VINDO AO SEU CADASTRO </h1> <br>
                    <form action="pegardados.php" method="POST">
                    <div class="form-group">
                    <label for="nome">Digite seu  nome</label>
                    <input type="text" class="form-control" placeholder="EX : João Cerqueira" name="txtnome" required >
                    </div>
                    <div class="form-group">
                    <label for="endereco">Digite sua idade</label>
                    <input type="text" class="form-control" placeholder="EX : 22 anos" name="txtidade" >
                    </div>
                    <div class="form-group">
                    <label for="telefone">sexo</label>
                    <input type="text" class="form-control" placeholder="EX : (71) 99355-1967" name="txtsexo" >
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                    </div>
                    </form>
                    <a href ="index.php" class="btn btn-info"> Ínicio</a>
                </div>
            </div>
        </div>

            
                
         




</body>
</html>