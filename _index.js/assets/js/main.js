function updateImagem(dados){
    const foto_tatuagem = document.querySelector('.photo')

    foto_tatuagem.src = dados.foto
    foto_tatuagem.alt = dados.titulo

    const tittle = document.querySelector('.tittle')
    tittle.innerHTML =  `<h3>${dados.titulo}</h3>`

    const description = document.querySelector('.description')
    description.innerHTML = `<p>${dados.descricao}</p>`    

    const feito = document.querySelector('.feito')
    feito.innerHTML = `<aside>Feito em: ${dados.data}</aside>` 

}

(async () => {
    const dados = await request()
    updateImagem(dados)
})()