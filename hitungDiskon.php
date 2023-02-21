<?php

function HitungDiskon($nilai)
{
    $total = $nilai['totalBelanja'];
    $diskon = 0;
    if ($total > 10_000_000) {
        $diskon = "Potongan harga anda adalah Rp. : " . "<b>" . 200_000 . "</b>";
    } elseif ($total == 10_000_000) {
        $diskon = "Potongan harga anda adalah Rp. : " . "<b>" . 150_000 . "</b>";
    } elseif ($total >= 7_500_000) {
        $diskon = "Potongan harga anda adalah Rp. : " . "<b>" . 100_000 . "</b>";
    } elseif ($total >= 5_000_000) {
        $diskon = "Potongan harga anda adalah Rp. : " . "<b>" . 50_000 . "</b>";
    } else {
        $diskon = "Anda tidak mendapat potongan harga!";
    }
    return $diskon;
}

// echo HitungDiskon(6_000_000);

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
        <input type="number" placeholder="Type here" name="totalBelanja">
        <br>
        <button name="submit" type="submit">
            Lihat Diskon
        </button>
    </form>

    <?php if (isset($_POST['submit'])) : ?>
        <?= "Total belanja anda : " . "<b>" . $_POST['totalBelanja'] . "</b>" ?>
        <br>
        <?= HitungDiskon($_POST) ?>
    <?php endif; ?>

</body>

</html>