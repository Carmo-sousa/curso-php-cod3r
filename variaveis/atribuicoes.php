<h1 class="titulo">Atribuições</h1>
<!-- https://www.php.net/manual/pt_BR/language.operators.php -->
<?php
$title = "Atribuições";
echo $title ?? "Inexistente";
echo "<br/>";
$numero = 10;

echo "$numero";
$numero++; // Incrementa 1 a variável
echo "<br/>";
echo $numero;

$numero += 1;
echo "<br/> $numero";

--$numero;
echo "<br/> $numero";
?>
