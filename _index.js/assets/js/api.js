async function request(){
    const url = 'https://raw.githubusercontent.com/Joannegton/portifolio_key/main/data/profile.json';
    const response = await fetch(url)
    const dados = await response.json()
    return dados
}
