<h1 class="titulo">String</h1>

<?php
echo "Eu sou uma string";
echo "<br>";
var_dump("Eu também");
echo "<br>";

// Concatenação
echo "Nós também" . " somos"; // Em PHP usa-se o '.' para concatenar strings
echo "<br>", "Também aceito", " virgulas";
echo "<br>";
echo "'Teste'" . ' "Teste"' . '\'Teste\'' . "\"Teste\"" . "\\";

print("<br> Também existe a função print");
print "<br> Também existe a função print";

// Funções da string
echo "<br>" . strtoupper("uppercase");
echo "<br>" . strtolower("LOWERCASE");
echo "<br>" . ucfirst("upper first");
echo "<br>" . ucwords("todas as palavras com a primeira letra maiúscula");
echo "<br>" . strlen("Quantas letras?");
echo "<br>" . mb_strlen("Eu também", "utf-8");
echo "<br>" . substr("Só uma parte mesmo", 7, 6);
echo "<br>" . str_replace("isso", "aquilo", "Trocar isso");
?>
