<?php
$id = $_GET["id"];
$conexao = new PDO("sqlite:banco.db");
$consulta = "SELECT * FROM anime WHERE id = ?";

$cursor = $conexao->prepare($consulta);
$cursor->execute([$id]);
$linha = $cursor->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>
</head>

<body style="
    display: flex;
    flex-flow: column;
    align-items: center;
">
    <div style="
    display: flex;
    flex-flow: column;
    align-items: center;
    width: 400px;
">
        <h1><?= $linha["nome"] ?></h1>
        <div><img src="<?= $linha["img"] ?>" alt="" style="max-height:40vh"></div>
        <p><?= $linha["descricao"] ?></p>
    </div>
</body>

</html>