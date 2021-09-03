<h1 class="titulo">Valor vs Referência</h1>

<?php
$variavel = 'valor inicial';
echo $variavel;

// Atribuição  por valor.
$variavelValor = $variavel;
echo "<br/> $variavelValor";
$variavelValor = 'novo valor';
echo "<br/> $variavelValor";

// Atribuição por referência.
$variavelValor = &$variavel;
echo "<br/>$variavelValor";

$variavel = 'Outro valor.';
echo "<br/>$variavelValor";
?>
