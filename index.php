<?php
$conexao = new PDO("sqlite:banco.db");

$cursor = $conexao->query("SELECT * FROM anime ORDER BY nome DESC");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>
</head>

<body>
    <?php foreach ($cursor as $linha) { ?>
        <p>
            <a href="detalhes.php?id=<?= $linha['id'] ?>">
                <?= $linha["nome"] ?>
            </a>
        </p>
    <?php } ?>
</body>

</html>