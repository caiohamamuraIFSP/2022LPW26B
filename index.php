<?php
$conexao = new PDO("sqlite:banco.db");

$cursor = $conexao->query("SELECT * FROM anime");
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
        <div style="display:flex;align-items:center;margin-left:calc(50vw - 100px)">
            <a href="detalhes.php?id=<?= $linha['id'] ?>" style="    display: flex;
    align-items: center;
    flex-flow: row-reverse;">
                <div style="margin:5px"><?= $linha["nome"] ?></div>
                <img style="height:50px;margin:5px" src="<?= $linha["img"] ?>">
            </a>
    </div>
    <?php } ?>
</body>

</html>