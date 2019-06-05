<?php 

include_once "funcoes.php";
//Aula sobre funções //



$usuario = logarUsuario("Tiago Ferreira", 1);
//$usuario = "false";

//Aula sobre o laço for envolvendo arrays.

$jsonProdutos = file_get_contents('Produtos.json');

$produtos = json_decode($jsonProdutos, true);
$produtos = $produtos['Produtos'];

addProduto("Curso Mobile Android", "Curso para criar um app", 5000, "img/letraH.png");

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

