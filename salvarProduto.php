<?php 

include_once "funcoes.php";

echo "<pre>";
var_dump($_FILES);

$nomeProduto = $_POST['nomeProduto'];
$precoProduto = $_POST['precoProduto'];
$descProduto = $_POST['descProduto'];
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivoTmp = $_FILES['arquivo']['tmp_name'];
$caminhoImg = "img/$nomeArquivo";

move_uploaded_file($arquivoTmp, "img/$nomeArquivo");

addProduto($nomeProduto, $descProduto, $precoProduto, $caminhoImg);