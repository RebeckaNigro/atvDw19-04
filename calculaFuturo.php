<?php

/*echo imprime na saída. var_dump retorna o datalhamenot sobre o tipo e 
conteúdo da variável*/
echo var_dump($_GET);

$nome = $_GET['nome'];
$cor = $_GET['cor'];

if( strcasecmp($nome,'Stalin') == 0 ){
    header("Location: resultado.php?frase=Muita Sorte $nome&cor=".urlencode($cor)."&img=".urlencode('foto.png'));
    //header('Location: resultado.php?frase=Muita Sorte '.$nome.'&cor='.$cor);
}
else{
    header("Location: resultado.php?frase=Trabalhe muito hoje $nome&cor=".urlencode("#FF0000")."&img=".urlencode('foto.png'));
   
}

?>