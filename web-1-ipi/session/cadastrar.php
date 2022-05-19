<form action="add-usuario.php" method="POST">
    <div class="container-inscricao">
        <h3>Cadastre-se</h3>
        <div class="inscricao">
            <input name="usuario" class="inscricao-nome" type="text" placeholder="Usuario">
            <input name="email" class="inscricao-email" type="email" placeholder="Email">
            <input name="senha" class="inscricao-senha" type="password" placeholder="Senha">
            <input class="inscricao-senha" type="password" placeholder="Confimar Senha">
        </div>
        <button type="submit" class="button-inscricao">Criar minha conta grátis</button>
    </div>
</form>

<style>
    .section-inscricao {
    display: flex;
    align-items: center;
}

.container-inscricao{
    display: flex;
    flex-direction: column;
    align-items: center;
}


.inscricao {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
}

.inscricao-nome, .inscricao-email, .inscricao-senha {
    margin: 10px;
    border-radius: 6px;
    width: 20rem;
}

.button-inscricao {
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 6px;
    width: 15rem;
    height: 2.1rem;
    margin: 10px;
    background: #19D3DA;
    color: #000;
    font-size: 1rem;
    font-family: 'Merriweather', serif;
}
</style>