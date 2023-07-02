<?php
echo "O valor do campo email é: " . $_POST['login'];
echo "O valor do campo senha é: " . $_POST['senha'];

$url  = 'https://raw.githubusercontent.com/Joannegton/portifolio_key/main/data/profile.json';
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
$decod = json_decode(($result));

$email = ($decod->tatuadora->email);


if($_POST['login'] == $email AND $_POST['senha'] == 'amoessagostosa'){
    echo 'entrou pivete';
 } else{
    echo 'deu ruim pivete';
}
