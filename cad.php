<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 
<body>
    <a href="index.php">Inicio</a>
    <a href="cad.php">Cadastro</a>
    <a href="log.php">Login</a>
    <div class="singup page2Sing">
        <form class="form">
            <h1>Olá</h1>
            <h4>Preencha os campos abaixo</h4>
            <div>
                <label for='name'>Nome</label><br>
                <input type='text' id='name' name='name' placeholder="Nome completo" autocomplete="on"><br>
            </div>
            <div>
                <label for='email'>E-mail</label><br>
                <input type='text' id='email' placeholder="" autocomplete="on"><br>
            </div>
            <div>
                <label for='password'>Senha</label><br>
                <input type='password' id='password' autocomplete="on"><br>
            </div>
            <div>
                <label for='password'>Confirme a Senha</label><br>
                <input type='password' id='passwordconfirm' autocomplete="on"><br>
            </div><br>
            <div id="button">
                <a href="page2.html">FINALIZAR</a>
            </div>
        </form>
    </div>
</body>
 
</html>