<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form POST</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Nama anda :</label>
        <input type="text" name="nama">
        <button type="submit" name="submit">Sumbit</button>
    </form>
    <?php if (isset($_POST['submit'])) : ?>
        <h4>Nama Anda : <?= $_POST['nama']; ?></h4>
    <?php endif; ?>
</body>

</html>