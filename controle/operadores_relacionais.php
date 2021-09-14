<style>
    p {
        margin-bottom: 0px;
    }
</style>
<h1 class="title">Operadores Relacionais</h1>

<?php
var_dump(1 == 1);
var_dump(1 > 1);
var_dump(1 >= 1);
var_dump(1 < 1);
var_dump(1 <= 1);
var_dump(1 != 1);
var_dump(1 <> 1);

var_dump(10 === "10");
var_dump(10 !== "10");

echo "<p>Relacionais no If/Else</p><hr>";

$idade = 18;

if($idade >= 18) {
    echo "Pode beber!<br>";
} else if($idade < 18) {
    echo "Você não pode beber!";
}

echo "<p>Spaceships</p><hr>";
var_dump(5 <=> 1);
var_dump(1 <=> 5);
?>
