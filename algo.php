<?php

$nome = $_POST['nome']
$telefone = $_POST['telefone']

$linha = "$nome " \ " $telefone " PHP_EOL;

file_put_contents('cadastro.txt', $linha , FILE_APPEND);

exit

?>