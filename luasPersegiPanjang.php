<?php

function sum($nilai)
{
    $panjang = $nilai['panjang'];
    $lebar = $nilai['lebar'];

    return $panjang * $lebar;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Persegi Panjang</title>
</head>
<style>
    body {
        padding: 10px;
    }

    input {
        padding: 4px;
    }

    button {
        padding: 9px;
    }
</style>

<body>

    <form method="post">
        <table>
            <tr>
                <td>
                    <label for="panjang">Panjang :</label>
                </td>
                <td>
                    <input type="number" name="panjang" placeholder="Masukan Panjang">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="lebar">Lebar :</label>
                </td>
                <td>
                    <input type="number" name="lebar" placeholder="Masukan Lebar">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit">
                        Submit
                    </button>
                </td>
            </tr>
        </table>
    </form>

    <br>
    <br>

    <?php if (isset($_POST["submit"])) : ?>
        <h1>
            <?= sum($_POST) ?>
        </h1>
    <?php endif; ?>


</body>

</html>