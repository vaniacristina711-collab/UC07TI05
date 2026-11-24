const formCadastro = document.getElementById('form-cadastro')

if(formCadastro) {
    const inputCep = document.getElementById('Cep')
    const inputuf = document.getElementById('uf')
    const inputsenha = document.getElementById('senha')
    const inputconfirmasenha = document.getElementById('confirma-senha')
    const errosenha = document.getElementById('erro-senha')
    const msgCepStatus = document.getElementById('Cep-status')

}

inputCep.addEventlistener('input',() =>{
    let valor = Event.targent.value.replace(/\D/g,'');

    valor = valor.substring(0,8);

    if(valor.length > 5) {
        valor = valor.replace(/(\d{5})(\d)/,'$1-$2');
    }
    Event.targent.value = valor;
    inputCep.classlist.remove('erro')
});

