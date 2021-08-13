<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização do exercício</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "{$_GET["dir"]}/{$_GET["file"]}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                $dir = $_GET["dir"];
                $file = $_GET["file"];

                include("{$dir}/{$file}.php")
            ?>
        </div>
    </main>
    <footer class="rodape">
        <h3>COD3R & ALUNOS &copy; <?php echo date("Y"); ?></h3>
    </footer>
</body>
</html>
