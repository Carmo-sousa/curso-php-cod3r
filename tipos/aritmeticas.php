<h1 class="titulo">Operações Aritméticas</h1>

<?php
echo 1 + 1, "<br>";
var_dump(1 + 1);
echo "<br>";
echo 2 - 1, "<br>";
echo 2 * 5, "<br>";
echo 7 / 4, "<br>";
echo 7 % 4, "<br>";
echo 5 ** 2, "<br>";
echo 5 / 0, "<br>";
echo intdiv(7, 4), "<br>";
echo round(7 / 4), "<br>";
?>


<pre>
    // Precedência de operadores.
    () => ** => / * => + -
</pre>
<br>

<h2>Precedência</h2>

<?php
echo 2 + 3 * 4, "<br>"; 
echo (2 + 3) * 4, "<br>"; 
echo 2 + 3 * 4, "<br>"; 
echo 2 + 3 * 4 ** 2, "<br>"; 
echo ((2 + 3) * 4) ** 2, "<br>"; 
?>
