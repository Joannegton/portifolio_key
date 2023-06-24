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

function updatePost(dados){
    const documento = document.querySelector('.page')
    documento.innerHTML = dados.Conteudos.postagens.map
    (post => 
        `
        <article class="post">
            <img src="${post.foto}" alt="${post.titulo}" class="photo">
            <h3>${post.titulo}</h3>
            <p>${post.descricao}</p>
            <div class="feito">
                <p>Feito em:${post.data}</p>
            </div>
        </article>    
        `)
        .join('')
}

(async () => {
    const dados = await request()
 
    updatePost(dados)
})()