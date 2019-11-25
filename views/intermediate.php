<?php
require_once ('../database/Connection.php');
Connection::conect();

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LeQuiz | Página Intermediária</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container {
            width: 600px;
            margin-top: 4em;
        }

        #centered {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Início
            </div>
            <div class="card-body">
                <h5 class="card-title">Quiz Relâmpago de Lógica | By Turma 924</h5>
                <p class="card-text">
                    Clique no botão abaixo para iniciar o Quiz. <br>
                    <b>OBS.:</b> Lembre-se de iniciar o temporizador! ;)
                </p>
                <div id="centered">
                    <a href="quiz.php?id=<?php echo $id?>" class="btn btn-primary">INICIAR QUIZ</a>
                </div>
            </div>
        </div>
    </div>

</body>

</html>