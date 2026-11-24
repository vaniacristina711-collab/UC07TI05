<?php include './incluides/header.php'; ?>

<main class="conteudo-principal container-form">
 <section class="card-form">
   <div class="cabecalho-form">
    <h2>Criar conta de doador</h2>
    <p>Preencha seus dados para participar da campanha de arrecadação</p>

  </div>
    <form id="form-cadastro" class="formulario" method="POST" action="action/auth-register.php">
    <fieldset class="grupo-secao">
        <legend>Dados pessoais e Acesso</legend>
        <div class="grupo-input">
            <label for="nome">Nome completo</label>
            <input
             type="text"
             id="nome"
             name="nome"
             placeholder="Ex.Maria da silva"
             maxlength="150"
             required
             >
        </div>
        <div class="grupo-input">
            <label for="email">Email</label>
            <input
             type="text"
             id="email"
             name="email"
             placeholder="Ex.Maria@email.com"
             maxlength="150"
             required
             >
        </div>

        <div class="linha-dupla">

           <div class="grupo-input">
            <label for="senha">senha</label>
             <input
             type="text"
             id="senha"
             name="senha"
             placeholder="monimo 6 caracteres"
             maxlength="6"
             required
             >
           </div>

           <div class="grupo-input">
            <label for="Confirmar-senha">Comfirme a senha</label>
             <input
             type="password"
             id="confirma-senha"
             name="confirma-senha"
             placeholder="Digite novamente"
             maxlength="6"
             autocomplete="new-passaword"
             required
             >
           </div> 

        </div>

    </fieldset>

    <fieldset class="grupo-secao">
      <label>Endereço para logistica de coletas</label>

                   <div class="linha-dupla">
 
                    <div class="grupo-input">
                        <label for="cep">CEP</label>
                        <input
                            type="text"
                            id="cep"
                            name="cep"
                            placeholder="Ex: 12345-678"
                            maxlength="9"
                            required
                        >
                        <small id="cep-status" class="texto-ajuda">
                            Digite o CEP para preenchimento automático.
                        </small>
                    </div>
 
                    <div class="grupo-input">
                        <label for="bairro">Bairro</label>
                        <input
                            type="text"
                            id="bairro"
                            name="bairro"
                            placeholder="Preenchimento automático"
                            required
                        >
                    </div>
 
                </div>
 
                <div class="grupo-input">
                    <label for="logradouro">Logradouro</label>
                    <input
                        type="text"
                        id="logradouro"
                        name="logradouro"
                        placeholder="Ex: Rua Exemplo, 123"
                        maxlength="200"
                        required
                    >
                </div>
 
             
                <div class="linha-dupla">
 
                    <div class="grupo-input">
                        <label for="localidade">Cidade</label>
                        <input
                            type="text"
                            id="localidade"
                            name="localidade"
                            placeholder="Preenchimento automático"
                            maxlength="100"
                            required
                        >
                    </div>
 
                    <div class="grupo-input">
                        <label for="uf">Estado</label>
                        <input
                            type="text"
                            id="uf"
                            name="uf"
                            placeholder="UF"
                            maxlength="2"
                            required
                        >
                    </div>
 
                </div>
 
            </fieldset>
    <button type="submit" class="btn-sustentavel btn-bloco btn-grande">Cadastro</button>
</form>
<div class="rodape-form">

</div>
</section>
</main>

<?php include './incluides/footer.php'; ?>