<h1 class="title">Operações</h1><hr>

<?php
$dados1 = [
    'nome' => 'Jose',
    'idade' => 24
];

$dados2 = [
    'naturalidade' => 'Fortaleza'
];

$dadosCompletos = $dados1 + $dados2;

print_r($dadosCompletos);

// Retorna true se for um array.
echo '<br>' . is_array($dadosCompletos);

// Retorna o total de itens do array
echo '<br>' . count($dadosCompletos);

// Retorna um index aleatório
$index = array_rand($dadosCompletos);
echo '<br>' . $index;

echo "<br> Nome: {$dadosCompletos['nome']}";

// Remove um item do array
unset($dadosCompletos['naturalidade']);

echo '<br>';
print_r($dadosCompletos);

$impares = [1, 3, 5, 7, 9];
$pares = [0, 2, 4, 6, 8];

$nums = $pares + $impares;

echo '<br>';
print_r($nums);

$decimais = array_merge($impares, $pares);
echo '<br>';
print_r($decimais);

sort($decimais);

echo '<br>';
print_r($decimais);
?>
