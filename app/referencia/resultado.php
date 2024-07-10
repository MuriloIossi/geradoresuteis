<?php
$autor = $_POST["autor"] ?? NULL;
$titulo = $_POST["titulo"] ?? NULL;
$edicao = $_POST["edicao"] ?? NULL;
$cidade = $_POST["cidade"] ?? NULL;
$editora = $_POST["editora"] ?? NULL;
$ano = $_POST["ano"] ?? NULL;


if($autor != NULL && $titulo != NULL && $edicao != NULL && $cidade != NULL && $editora != NULL){

    $referencia = $autor.". ".$titulo.". ".$edicao." ed. ".$cidade.": ".$editora.", ".$ano;

} else{
    $referencia = "Insira os dados para começar.";
}

?>