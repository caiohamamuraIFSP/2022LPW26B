<?php
$id = $_GET["id"];
$conexao = new PDO("sqlite:banco.db");
$consulta = "SELECT * FROM anime WHERE id=$id";

$cursor = $conexao->query($consulta);
$linha = $cursor->fetch();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <h1><?= $linha["nome"] ?></h1>
        <p><?= $linha["descricao"] ?></p>
</body>

</html>