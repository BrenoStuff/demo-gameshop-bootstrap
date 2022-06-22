
function editGame(id, nome, desenvolvedora, foto, descricao, preco){
    const inputId = document.querySelector('#modalEditGame input[name=id]')
    const inputNome = document.querySelector('#modalEditGame input[name=nome]')
    const inputDesenvolvedora = document.querySelector('#modalEditGame input[name=desenvolvedora]')
    const inputFoto = document.querySelector('#modalEditGame input[name=foto]')
    const inputDescricao = document.querySelector('#modalEditGame input[name=descricao]')
    const inputPreco = document.querySelector('#modalEditGame input[name=preco]')
    inputId.value = id
    inputNome.value = nome
    inputDesenvolvedora.value = desenvolvedora
    inputFoto.value = foto
    inputDescricao.value = descricao
    inputPreco.value = preco
    openModal('#modalEditGame')
}