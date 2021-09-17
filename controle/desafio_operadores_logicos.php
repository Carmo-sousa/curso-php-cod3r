<h1 class="title">Desafio operadores lógicos</h1>
<hr>
<br>
<!-- 
    Dois trabalhos -> quinta e sexta
    Se os dois forem executados -> Tv 50 e sorvete
    Se apenas um for executado -> TV 32 e sorvete
    Se nenhum for executado -> fica em casa mais saudável
 -->

 <form action="#" method="post">
     <div>
         <label for="t1">Trabalho (quinta):</label>
         <select name="t1" id="t1">
             <option value="1">Executado</option>
             <option value="0">Não executado</option>
         </select>
     </div>
     <div>
         <label for="t2">Trabalho (sexta):</label>
         <select name="t2" id="t2">
             <option value="1">Executado</option>
             <option value="0">Não executado</option>
         </select>
     </div>
     <button>Executar</button>
 </form>


<style>
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        padding: 20px;
    }

    button {
        margin: 20px;
        width: 250px;
    }
</style>

<!-- 
    Dois trabalhos -> quinta e sexta
    Se os dois forem executados -> Tv 50 e sorvete
    Se apenas um for executado -> TV 32 e sorvete
    Se nenhum for executado -> fica em casa mais saudável
 -->

<?php
$trabalhoQuinta = $_POST["t1"];
$trabalhoSexta = $_POST["t2"];

if(isset($trabalhoQuinta, $trabalhoSexta)) {
    if(!!$trabalhoQuinta and !!$trabalhoSexta) {
        echo "<p>TV 50' e sorvete</p>";
    } else if(!!$trabalhoQuinta xor !!$trabalhoSexta) {
        echo "<p>TV 32' e sorvete</p>";
    } else {
        echo "<p>Ficar em casa mais saudável.</p>";
    }
}

?>
