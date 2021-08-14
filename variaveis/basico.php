<h1 class="titulo">Variáveis</h1>

<?php
$numeroA = 13;

echo $numeroA, "<br>";
var_dump($numeroA);

$a = 7;
$b = 7;

$soma = $a + $b;
echo "<br>";
var_dump($soma);
echo "<br>";
echo isset($soma);

echo "<br>";
unset($soma);

echo "<br>";
var_dump($soma);
echo "<br>";
var_dump($_SERVER["HTTP_HOST"]);

?>
