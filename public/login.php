<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/login.css">

</head>

<body>
    <div class="left-menu">
        
        <img src="https://chatsimbr.com.br/wp-content/uploads/2021/12/4542107.jpg.webp" alt="imagem" class="img-fluid" id="img1">
    </div>
    <div class="menu">
        <div class="conteudo">
            <h2>Bem-vindo(a)</h2>

            <div class="formulario" >
                <form action="login.php" method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="email" class="form-control" required/>
                        <label class="form-label" for="email">Endereço de email</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="senha" id="senha" class="form-control" required/>
                        <label class="form-label" for='senha'>Senha</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="remember" checked />
                                <label class="form-check-label" for="remember"> Lembrar de mim </label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                            <a href="#!">Esqueceu sua senha?</a>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4" id="btn" >Logar</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Não é um membro? <a href="Cadastro.php">Registre-se</a></p>
                    </div>
                </form>
                </div>
            </div>
    </div>
</body>

<?php

require_once('./config/configLogin.php');
?>
</html>


