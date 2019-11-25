<?php
    
    require_once('../database/Connection.php');
    Connection::conect();

    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LeQuiz | Página Principal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../services/timer.js"></script>

    <style>
        button img {
            width: 98px;
            height: 98px;
        }

        .top {
            margin-top: 2em;
        }

        .container {
            width: 600px;
            margin-top: 4em;
        }

        .group-btn,
        .header {
            text-align: center;
        }

        .top-bottom {
            margin-top: 3em;
            margin-bottom: 3em;
        }

        .small {
            width: 100px;
            height: 100px;
        }

        .span {
            width: 90%;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="form-group header">
            <p>
                <b>Temporizador:</b>
                <span id="counter">00:00:00</span><br>
            </p>

            <input type="button" class="btn-danger btn" value="Parar" onclick="para();">
            <input type="button" class="btn-success btn" value="Iniciar" onclick="inicia();">
            <input type="button" class="btn-primary btn" value="Zerar" onclick="zera();">
        </div>

        <p>
            <h1>Quiz</h1>
            Responda essas 6 questões da Icar (Organização Internacional para a Habilidade Cognitiva) e veja a quantas anda seu raciocínio numérico, verbal e espacial.
        </p>

        <div class="form-group shadow-none p-3 mb-5 bg-light rounded">
            <h3><b>1</b>/6</h3>
            Qual dos cubos abaixo poderia ser a rotação do cubo maior?
        </div>

        <form action="../controllers/quiz_store.php?id=<?php echo $id; ?>" class="form-group" method="post">

            <div class="form-group">
                <div class="group-btn">
                    <fieldset>
                        <img class="span" src="https://img.playbuzz.com/image/upload/ar_1.5,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/40b6c70b-52b0-428e-87c5-5cb7a343599e.jpg">
                    </fieldset>
                </div>
                <div class="group-btn">
                    <div class="btn border shadow-sm bg-white rounded">
                        <img class="small" src="https://img.playbuzz.com/image/upload/ar_1.0,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/8b9bc85d-e9ce-40c4-8045-4677de187f07.jpg">
                    </div>
                    <div class="btn border shadow-sm bg-white rounded">
                        <img class="small" src="https://img.playbuzz.com/image/upload/ar_1.0,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/c88d794c-7b97-41bb-8890-ed00a7ffd102.jpg">
                    </div>
                    <div class="btn border shadow-sm bg-white rounded">
                        <img class="small" src="https://img.playbuzz.com/image/upload/ar_1.0,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/d4f77ec9-b550-4cef-89cf-1fb880314110.jpg">
                    </div>
                    <div class="btn border shadow-sm bg-white rounded">
                        <img class="small" src="https://img.playbuzz.com/image/upload/ar_1.0,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/8d88dc76-e73a-4338-8829-cb731eb4e4ed.jpg">
                    </div>
                </div>
                <div class="shadow-none p-3 mb-2 bg-light rounded top">
                    Selecione a opção correspondente:
                </div>
                <select name="image[]" class="form-control">
                    <option value="0" selected>Selecione</option>
                    <option value="1">Imagem 01</option>
                    <option value="2">Imagem 02</option>
                    <option value="3">Imagem 03</option>
                    <option value="4">Imagem 04</option>
                </select>
            </div>

            <div>
                <div class="shadow-none p-3 mb-2 bg-light rounded top-bottom">
                    <h3><b>2</b>/6</h3>
                    Se o dia depois de amanhã é dois dias antes da quinta-feira, que dia é hoje?
                </div>
                <select name="week[]" class="form-control">
                    <option value="0" selected>Selecione</option>
                    <option value="wednesday">Quarta-feira</option>
                    <option value="monday">Segunda-feira</option>
                    <option value="tuesday">Terça-feira</option>
                    <option value="sunday">Domingo</option>
                </select>
            </div>

            <div class="shadow-none p-3 mb-2 bg-light rounded top-bottom">
                <h3><b>3</b>/6</h3>
                Marque a palavra que não combina com as outras:
            </div>
            <div>
                <select name="words[]" class="form-control">
                    <option value="0" selected>Selecione</option>
                    <option value="1">Cuiabá</option>
                    <option value="2">Cairo</option>
                    <option value="3">Buenos Aires</option>
                    <option value="4">Campinas</option>
                </select>
            </div>

            <div class="shadow-none p-3 mb-2 bg-light rounded top-bottom">
                <h3><b>4</b>/6</h3>
                4-7-11-18-29... Qual é o próximo número nessa sequência?
            </div>
            <div>
                <select name="sequence[]" class="form-control">
                    <option value="0" selected>Selecione</option>
                    <option value="1">47</option>
                    <option value="2">46</option>
                    <option value="3">55</option>
                    <option value="4">40</option>
                </select>
            </div>
            <div class="shadow-none p-3 mb-2 bg-light rounded top-bottom">
                <h3><b>5</b>/6</h3>
                Fernanda gosta do número 96, mas não do 45. Ela também gosta do número 540, mas não do 250. De qual número abaixo ela gosta?
            </div>

            <div>
                <select name="numbers[]" class="form-control">
                    <option value="0" selected>Selecione</option>
                    <option value="128">128</option>
                    <option value="140">140</option>
                    <option value="93">93</option>
                    <option value="132">132</option>
                </select>
            </div>

            <div class="shadow-none p-3 mb-2 bg-light rounded top-bottom">
                <h3><b>6</b>/6</h3>
                C, F, I, L, O... Nesta sequência, qual é a próxima letra?
            </div>

            <div>
                <select name="letters[]" class="form-control">
                    <option value="0" selected>Selecione</option>
                    <option value="T">T</option>
                    <option value="R">R</option>
                    <option value="W">W</option>
                    <option value="Q">Q</option>
                </select>
            </div>

            <div class="top-bottom group-btn">
                <input type="submit" value="Enviar" class="btn btn-primary btn-lg">
            </div>
        </form>
    </div>

</body>

</html>