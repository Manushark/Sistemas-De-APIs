<?php
require_once "motor.php";
?>

<!DOCTYPE html>
<html class="white" lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <link rel="shortcut icon" href="api.png" type="image/x-icon">
    <title>Sistema APIs</title>
</head>

<body>
    <?php include "header.php"; ?>

    <div class="container mt-5">
        <div class="box has-text-centered">
            <?php
            $numero_ejercicio = 1;
            $ejercicio = $exercices[$numero_ejercicio - 1];
            ?>
            <h1 class="title is-3"> <?= $ejercicio["name"] ?> </h1>
            <h2 class="subtitle is-5"> <?= $ejercicio['description'] ?> </h2>
            <a class="button is-link mt-3" href="<?= $ejercicio['link'] ?>" target="_blank">Ver API</a>
        </div>
        <div class="box">
            <form action="ejercicio1.php" method="post">
                <div class="field">
                    <label class="label">Nombre</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Ingresa un nombre" name="dato">
                    </div>
                    <div class="control mt-3">
                        <input class="button is-primary" value="Enviar" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>

        <?php
        if (!empty($_POST['dato'])) {
            $url = "https://api.genderize.io/?name={$_POST["dato"]}";
            $response = file_get_contents($url);
            $data = json_decode($response, true);
            $data["gender"] = ($data["gender"] == "male") ? "Masculino" : "Femenino";
        ?>
        <div class="notification is-success has-text-centered mt-4">
            <p>El nombre es <strong><?= $data["name"] ?></strong> y su género es <strong><?= $data["gender"] ?></strong>. La probabilidad de que sea <strong><?= $data["gender"] ?></strong> es de <strong><?= ($data["probability"] * 100) ?>%</strong>.</p>
        </div>
        <?php } ?>
    </div>
</body>

</html>