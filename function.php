<?php

function salam($nama = "Administrator")
{
    return "Selamat datang $nama";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>

    <?= salam("Zheka Baila Arkan") ?>

</body>

</html>