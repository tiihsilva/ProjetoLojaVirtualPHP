<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trovao</title>
</head>
<body>
    
    <?php 
    
    $nome = "Tiago";
    if($nome == "Tiago"){
        echo $nome;
    }else{
        echo "Não é o Tiago!";
    }

    for($i=0; $i < 5; $i++){
//        echo "Estou dentro de um for"."<br>";
            var_dump("Olá $nome"."<br>");
    }
    ?>
</body>
</html>