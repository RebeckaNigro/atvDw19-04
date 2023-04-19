<?php

echo var_dump($_GET);

$nome = $_GET['nome'];
$cor = $_GET['cor'];


if( strcasecmp($nome,'alexandre') == 0) {
    header("location: resultado.php?frase=Muita Sorte!&cor=$cor");

}
?>