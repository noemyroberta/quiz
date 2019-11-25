<?php
require_once('../database/Connection.php');
Connection::conect();

$id = $_GET['id'];
$rightQuestions = $_GET['rightQuestions'];

?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz | Página Final</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .container {
            width: 600px;
            margin-top: 4em;
        }

        .centered {
            text-align: center;
        }

        .form-group {
            margin-top: 2em;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Final
            </div>
            <div class="card-body">
                <h5 class="card-title centered"><b>PARABÉNS!</b> Você acertou <b><?php echo $rightQuestions; ?> questões!</b></h5>
                <p class="card-text">
                    Só precisamos de mais algumas informações para completarmos seus dados! :)<br>
                </p>
                <form action="../controllers/final_store.php?id=<?php echo $id; ?>" class="form-group" method="POST">
                    <div>
                        <div class="form-group">
                            <label>Frequência Cardíaca</label>
                            <input type="text" class="form-control" name="heartbeating" placeholder="Digite sua Frequência Cardíaca" required>
                        </div>
                        <div class="centered">
                            <input type="submit" class="btn-primary btn btn-lg" value="Finalizar" name="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>