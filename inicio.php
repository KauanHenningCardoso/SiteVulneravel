<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seja Bem Vindo - Site de Teste</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <main>
        <?php 
        session_start();
        if($_SESSION['acesso'] == "admin"){
        ?>
            <div class="row">
                <div class="col-12">
                    <h1>Seja bem vindo</h1>
                    <p><a href="php/sair.php">Sair</a></p>
                </div>
            </div>
        <?php
            }else{
                 header("location:index.php");
            }
        ?>       
    </main>
</body>
</html>



