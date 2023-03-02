<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/cadastro.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="nav">
            <ul>
                <li> Inicio/ </li>
                <li> Sobre/ </li>
                <li> Login/ </li>
                <li> Cadastro </li>
            </ul>
        </div>
    </header>
    <div class="formulario-cadastro">
        <img src="https://img.freepik.com/vetores-gratis/particula-de-tecnologia-abstrata-realista-de-fundo_23-2148431735.jpg" alt="image" class="img-formulario">
        <h1>Cadastre-se</h1>
        <form method="POST" action="Cadastro.php">
            <div class="left-inputs">
                <label for="email">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control"required>
                
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" class="form-control"required>
            </div>

            <div class="right-inputs">
                <label for="email">Senha</label>
                <input type="password" id="senha" name="senha" class="form-control"required>
                <label for="senha">Confirmar senha:</label>
                <input type="password" for="senha" class="form-control" required>
            </div>
            <div class="info-login">
                <a href="login.php"><span>Ja tem cadastro? Entre</span></a>
            </div>
        
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>

<?php 
include("./config/configCadastro.php");
?>

</html>
