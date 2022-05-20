<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bem vindo ao sistema. Faça login.</h1>
    <form action="auth.php" method="POST">
        <div class="container-login">
            <h3>Login</h3>
            <div class="login">
                <input name="email" class="email" type="text" placeholder="E-mail" />
                <input name="senha" class="password" type="password" placeholder="Senha" />
                <button type="submit" class="button-login">Entrar</button>
            </div>
            <a href="cadastrar.php">Criar usuario</a>    
        </div>
    </form>
</body>

</html>

<style>
    /* your styles go here */
    .container-login {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .login {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Merriweather', serif;
    }

    .email,
    .password {
        margin: 10px;
        border-radius: 6px;
        width: 20rem;
    }

    .button-login {

        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        width: 15rem;
        height: 2.1rem;
        margin: 10px;
        background: #19D3DA;
        color: #000;
        font-size: 1.2rem;
        font-family: 'Merriweather', serif;
    }
</style>