<?php

function HitungDiskon($nilai)
{
    $total = $nilai['tBelanja'];
    $diskon = 0;
    if ($total > 10_000_000) {
        $diskon = "Potongan harga anda adalah : " . "<b>" . 200_000 . "</b>";
    } elseif ($total == 10_000_000) {
        $diskon = "Potongan harga anda adalah : " . "<b>" . 150_000 . "</b>";
    } elseif ($total >= 7_500_000) {
        $diskon = "Potongan harga anda adalah : " . "<b>" . 100_000 . "</b>";
    } elseif ($total >= 5_000_000) {
        $diskon = "Potongan harga anda adalah : " . "<b>" . 50_000 . "</b>";
    } else {
        $diskon = "Anda tidak mendapat potongan harga!";
    }
    return $diskon;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Menghitung Diskon</title>
</head>

<body>
    <form action="" method="post">
        <label>Total Belanja : </label>
        <input type="number" placeholder="Type here" name="tBelanja">
        <br>
        <button name="submit" type="submit">
            Lihat Diskon
        </button>
    </form>

    <?php if (isset($_POST['submit'])) : ?>
        <?= "Total belanja anda : " . "<b>" . $_POST['tBelanja'] . "</b>" ?>
        <br>
        <?= HitungDiskon($_POST) ?>
    <?php endif; ?>

</body>

</html>