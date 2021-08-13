<h1 class="titulo">Integração CSS</h1>

<h1>
    <!-- Bloco de código PHP dentro de um elemento HTML -->
    <?php
        echo "Olá";
        echo "<small>";
        echo " Mundo!";
        echo "</small>"
    ?>
</h1>

<!-- Forma resumida do código PHP -->
<?= "<div>Outra forma de me 'expressar'!" ?>
<br>

<button dobro><?= "Olá" ?></button>

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-style: none;
        border-radius: 10px;
    }

    [dobro] {
        font-size: 2rem;
    }
</style>
