<?php include './incluides/header.php'; ?>

<main class="conteudo-principal container-form">
<selection class="card-form card-form-pequeno">
    <div class="cabecalho-form">
        <h2>Entra no solidariza</h2>
        <p>Acesse sua conta para acompanha ou registrar doações</p>
    </div>
    <form id="form-login" class="formulario" method="POST" actions="actions/aut_login.php">
        <div class="grupo-input">
           <label for="email">E-mail</label>
           <input type="email" id="email-login" name="senha" required="Digite seu email" autocomplete="currit-email" required>
        </div>

        <div class="grupo-input">
           <label for="senha">Senha</label>
           <input type="password" id="email-lsenha" name="senha" placeholder="Digite sua senha"autocomplete="current-password" required=">

        </div>
        <div class="grupo-input></div>
        <button type="subtim" class="btn-bloco btn-sustentavel">Entrar</button>
    <form>
    <div class="rodape-form">
        <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>
    </div>

</selection>
</main>


<?php include './incluides/footer.php'; ?>