<?php

include_once "funcoes.php";
function validarCompra($dadosCompras){
    $erros = [];
    if(!$dadosCompras){
        $erros[] = "Não foi recebido nenhum dado para realizar a compra!";
    };
    if(!validarNome($dadosCompras['nomeCliente'])){
        $erros[] = "Ta errado verifique novamente meu pãozinho de mel!";
    };
    if(!validarCPF($dadosCompras['cpfCliente'])){
        $erros[] = "CFP está errado, não se preocupe errar é humano!";
    };
    if(!validarCartao($dadosCompras['cartaoCliente'])){
        $erros[] = "Numero de cartão invalido, conte até dez e tente novamente!";
    }
    if(!validarDataValidade($dadosCompras['dataValidadeCartao'])){
        $erros[] = "Data de validade vencida, olha direito o que escreveu!";
    };
    if(!validarCVV($dadosCompras['cvvCartao'])){
        $erros[] = "Numero de CVV invalido, erras 3 digitos simples é complicado!";
    };

    return $erros;
};

$errosValidacao = validarCompra($_POST);

?>

<!DOCTYPE html>
<html lang="en">

<?php include_once "head.php"; 
?>

<body>
    
<?php include_once "header.php"; 
?>


    <main class="container">
        <section class="row">
            <div class="col-md-12">
            <!-- EXIBIR ERROS DE CADASTRO -->
            <?php if(count($errosValidacao) > 0): ?>
            <ul>
                <?php foreach ($errosValidacao as $erro): ?>
                    <li><?php echo $erro; ?></li>
                <?php endforeach; ?>
            </ul>

            </div>
                <?php else: ?>
            <div class="col md-12">
                <div class="alert alert-success" role="alert">
                Olá <?php echo $_POST['nomeCliente']; ?> Parabéns pela sua compra do produto <?php echo $_POST['nomeProduto']; ?>
            </div>
            </div>
            <?php endif; ?>

            <div class="col col-12">
            <a href="index.php" class="btn btn-primary"> Voltar para a home </a>
            </div>
        </section>
    </main>


</body>
</html>