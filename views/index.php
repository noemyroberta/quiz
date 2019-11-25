<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>LeQuiz | Página Inicial</title>

    <style>
        #container {
            width: 400px;
            margin-top: 4em;
            margin-bottom: 3em;
        }

        #f-container {
            margin-bottom: 2em;
            width: 600px;
            margin-top: 2em;
        }
    </style>
</head>

<body>
    <div id="f-container" class="container border">
        <div id="container" class="container">
            <form action="../controllers/user_login.php" method="post" class="form-group">

                <h1>Quiz Relâmpago de Lógica</h1>
                <p>By Turma 924 - IFAL, Campus Arapiraca</p>

                <div class="form-group">
                    <label for="age">Idade</label>
                    <input type="number" class="form-control" name="age" placeholder="Digite sua Idade" required>
                </div>

                <div class="form-group">
                    <label>Curso</label>
                    <select name="course[]" class="form-control">
                        <option selected>Selecione</option>
                        <option value="Informática">Informática</option>
                        <option value="Eletroeletrônica">Eletroeletrônica</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Nível de Facilidade com Lógica</label>
                    <select name="facility[]" class="form-control">
                        <option value="0" selected>Selecione</option>
                        <option value="Baixa">Baixa</option>
                        <option value="Média">Média</option>
                        <option value="Alta">Alta</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Altura</label>
                    <input type="number" class="form-control" name="height" placeholder="Digite sua Altura" step="any" required>

                </div>

                <div class="form-group">
                    <label>Peso</label>
                    <input type="number" class="form-control" name="weight" placeholder="Digite seu Peso" required>
                </div>

                <div class="form-group">
                    <label>Frequência Cardíaca</label>
                    <input type="text" class="form-control" name="heartbeating" placeholder="Digite sua Frequência Cardíaca" required>
                </div>

                <input type="submit" class="btn-primary btn btn-block btn-lg" value="Enviar" name="submit">
            </form>   
        </div>
    </div>

</body>
</html>