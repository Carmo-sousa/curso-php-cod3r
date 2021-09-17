<h1 class="title">Operadores Lógicos</h1>
<hr>

<?php
echo "<p>V ou F</p>";
var_dump(true);
echo "<br>";
var_dump(!true);

echo "<hr><p>Tabela verdade 'AND' (E)</p>";
var_dump(true && true);
echo "<br>";
var_dump(true && false);
echo "<br>";
var_dump(false and false);

echo "<hr><p>Tabela verdade 'OR' (OU)</p>";
var_dump(true || true);
echo "<br>";
var_dump(true || false);
echo "<br>";
var_dump(false or false);

echo "<hr><p>Tabela verdade 'XOR' (OU Exclusivo)</p>";
var_dump(true xor true);
echo "<br>";
var_dump(true xor false);
echo "<br>";
var_dump(false xor false);

echo "<hr><p>Exemplo</p>";

$idade = 62;
$sexo = 'M';

if($idade >= 60 && $sexo === 'F') {
    echo "Pode se aposentar F<br>";
} elseif($idade >= 65 && $sexo === "M") {
    echo "Pode se aposentar M<br>";
} else {
    echo "Não pode se aposentar...";
}

?>
