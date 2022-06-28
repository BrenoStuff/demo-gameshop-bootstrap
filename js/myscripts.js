
function editGame(id, nome, desenvolvedora, foto, descricao, preco){
    const inputId = document.querySelector('#openModalEditar input[name=id]')
    //console.log(inputId)
    const inputNome = document.querySelector('#openModalEditar input[name=nome]')
    const inputDesenvolvedora = document.querySelector('#openModalEditar input[name=desenvolvedora]')
    const inputFoto = document.querySelector('#openModalEditar input[name=foto]')
    const inputDescricao = document.querySelector('#openModalEditar input[name=descricao]')
    const inputPreco = document.querySelector('#openModalEditar input[name=preco]')
    inputId.value = id
    inputNome.value = nome
    inputDesenvolvedora.value = desenvolvedora
    inputFoto.value = foto
    inputDescricao.value = descricao
    inputPreco.value = preco
    // openModal('#openModalEditar')
}

// function openModal(idModal) {
// 	const modal = document.querySelector(idModal)
// 	modal.style.display = 'flex'
// }