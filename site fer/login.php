<?php


$nome = $_POST['nome'];
$senha = $_POST['senha'];

$nome_certo = 'fasboamorte';
$senha_certa = 123456;

if(($nome == $nome_certo) AND ($senha == $senha_certa))
    header('Location: banco.php?');
else
    header('Location: index.php?');

?>

