<h1 class="title">Mapa</h1><hr>

<?php
$arr = array(
    'idade' => 24,
    'nome' => 'Rômulo',
    'interesses' => ['esportes', 'sushi']
);

echo "Nome: {$arr['nome']}<br>";
echo "Idade: {$arr['idade']}<br>";
echo 'Interesses: ';
foreach($arr['interesses'] as $value) {
    echo "$value ";
};

foreach($arr['interesses'] as $value) {
?>

<p><?= $value ?></p>
<?php 
}
?>
