<h1 class="title">Desafio Switch</h1><hr>

<form action="#" method="post">
    <input type="text" name="param" id="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milhas</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-Km">Metros > Km</option>
        <option value="Km-metro">Km > Metros</option>
        <option value="c-f">Cº > Fº</option>
        <option value="f-c">Fº > Cº</option>
    </select>
    <button>Converter</button>
</form>

<?php
$param = $_POST['param'];
$conversao = $_POST['conversao'];

if(isset($param, $conversao)) {
    switch($conversao) {
        case 'km-milha': {
            $valor = $param/1.609;
            echo "$valor Milhas<br>";
            break;
        }
        case 'milha-km': {
            $valor = $param*1.609;
            echo "$valor Km<br>";
            break;
        }
        case 'metro-Km': {
            $valor = $param/1000;
            echo "$valor Km<br>";
            break;
        }
        case 'Km-metro': {
            $valor = $param*1000;
            echo "$valor Metros<br>";
            break;
        }
        case 'c-f': {
            $valor = ($param*(9/5))+32;
            echo "$valor Fº<br>";
            break;
        }
        case 'f-c': {
            $valor = ($param-32)*5/9+273.15;
            echo "$valor Cº<br>";
            break;
        }
        
    }
}
?>
