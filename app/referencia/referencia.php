<?php
include('resultado.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST e GET</title>
</head>
<body>
    <form action="" method="post">
    <label for="autor">Insira o nome do autor</label>
    <input type="text" name="autor" value="<?php $autor ?>"> <br>

    <label for="titulo">Insira o título do livro (com artigo somente no final)</label>
    <input type="text" name="titulo" value="<?php $titulo ?>"> <br>

    <label for="edicao">Insira o NÚMERO da edição</label>
    <input type="text" name="edicao" value="<?php $edicao ?>"> <br>

    <label for="Local_city">Insira o local (cidade)</label>
    <input type="text" name="cidade" value="<?php $cidade ?>"> <br>

    <label for="editora">Insira o nome da editora</label>
    <input type="text" name="editora" value="<?php $editora ?>"> <br>

    <label for="ano">Insira o ano</label>
    <input type="text" name="ano" value="<?php $ano ?>"> <br>
        
    <button type="submit">Enviar</button>
    <button type="reset">Limpar</button>

    </form>
        <h2>Aqui está sua referência: </h2> <br>
        <h3> <?= $referencia; ?> </h3>
</body>
</html>