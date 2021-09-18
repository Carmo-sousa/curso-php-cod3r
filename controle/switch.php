<h1 class="title">Switch</h1>
<hr>

<p>Exemplo com if/else</p><br>
<pre>
$categoria = 'luxo';
$preco;
$carro;

if($categoria === 'luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if($categoria == 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} else if($categoria == 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

</pre>

<?php
$categoria = 'luxo';
$preco;
$carro;

if($categoria === 'luxo') {
    $carro = 'Mercedes';
    $preco = 250000;
} else if($categoria == 'SUV') {
    $carro = 'Renegade';
    $preco = 80000;
} else if($categoria == 'Sedan') {
    $carro = 'Etios';
    $preco = 55000;
} else {
    $carro = 'Mobi';
    $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "Modelo: $carro preço: $precoFormatado";
?>
<hr>
<p>Exemplo com switch</p>
<pre>
$categoria = 'SUV';
$preco;
$carro;

switch($categoria) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    
    case 'SUV':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    
    case 'Sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
}

echo "Modelo: $carro preço: $preco";

</pre>

<?php
$categoria = 'SUV';
$preco;
$carro;

switch($categoria) {
    case 'luxo':
        $carro = 'Mercedes';
        $preco = 250000;
        break;
    
    case 'SUV':
        $carro = 'Renegade';
        $preco = 80000;
        break;
    
    case 'Sedan':
        $carro = 'Etios';
        $preco = 55000;
        break;
    default:
        $carro = 'Mobi';
        $preco = 33000;
}

$precoFormatado = number_format($preco, 2, ',', '.');
echo "Modelo: $carro preço: $preco<br>";
?>
