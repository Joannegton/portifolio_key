async function request(){
    const url = 'https://raw.githubusercontent.com/Joannegton/portifolio_key/main/data/posts.json';
    const response = await fetch(url)
    const dados = await response.json()
    return dados
}
