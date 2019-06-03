<?php 

include "funcoes.php";
//Aula sobre funções //



$usuario = logarUsuario("Tiago Ferreira", 1);
//$usuario = "false";

//Aula sobre o laço for envolvendo arrays.

$produtos = [
    
    "produto" =>["nome"=>"Curso Fullstack","descricao"=>"O curso fullstack ensina a roubar dados de cartões","preco"=> 1200, "img"=>"img/thor.jpg"],

    "produto2" =>["nome"=>"Curso Mobile","descricao"=>"O curso te ensina a não ter vida social","preco"=> 1300,"img"=>"img/thor.jpg"],
    
    "produto3" =>["nome"=>"Marketing Digital","descricao"=>"O curso te ensina a mentir","preco"=> 1300,"img"=>"img/thor.jpg"]    
     
]; 

$produtos = addProduto("Curso de UX", "Curso Incrível", 2000, 'img/thor.jpg',$produtos);


$categorias = ["cursos", "Tutoriais", "Artigos", "Forum", "Codigos"];

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

