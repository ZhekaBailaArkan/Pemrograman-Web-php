<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    .inputan {
        width: 500px;
        background-color: whitesmoke;

    }

    ::placeholder {
        color: aqua;
        font-weight: 600;
    }

    .form-input {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .table {
        width: 700px;
    }
</style>

<body>

    <div class="container form-input">
        <div class="row">
            <div class="col bg-light p-5 rounded-2">
                <h1>FORM</h1>
                <form action="" method="post" class="mt-5">
                    <div class="mb-3">
                        <input type="text" class="form-control inputan" required placeholder="Nama" autocomplete="off" id="exampleFormControlInput1" name="nama">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control inputan" required placeholder="Tempat, Tanggal Lahir" autocomplete="off" id="exampleFormControlInput2" name="ttl">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control inputan" required placeholder="Alamat" autocomplete="off" id="exampleFormControlInput3" name="alamat">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control inputan" required placeholder="Hobby" autocomplete="off" id="exampleFormControlInput4" name="hobby">
                    </div>
                    <button class="btn btn-primary " name="submit">
                        SUBMIT
                    </button>
                </form>
            </div>
        </div>
    </div>

    <br><br><br>

    <div class="container mb-5 form-input">
        <div class="row">
            <div class="col">
                <h2 class="mb-5">HASIL INPUT</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">TTL</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Hobby</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($_POST['submit'])) : ?>
                            <tr>
                                <td><?= $_POST['nama']; ?></td>
                                <td><?= $_POST['ttl']; ?></td>
                                <td><?= $_POST['alamat']; ?></td>
                                <td><?= $_POST['hobby']; ?></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>