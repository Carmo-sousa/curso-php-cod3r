<h1 class="title">Desafio sorteio</h1><hr>


<?php
$nomes = ["Rômulo", "Rodrigo", "Rogério"];

$index = array_rand($nomes);

echo "<h2>Personagem aleatório: $nomes[$index]</h2>";
?>
