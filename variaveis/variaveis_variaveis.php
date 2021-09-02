<h1 class="titulo">Variáveis variáveis variáveis</h1>

<?php
$a = 'valorA';
$$a = 'valorAA';

echo "$a {$$a} ${$a} $valorA";
?>
