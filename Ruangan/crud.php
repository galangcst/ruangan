<?php
include('function.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Data Rungan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #efebe9;
        }
    </style>
</head>

<body>
    <div class="container">

        <h1 class="text-center">Data Ruangan</h1>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-info">
                        Form input Data Ruangan
                    </div>
                    <div class="card-body">
                        <!-- awal form -->
                        <form action="aksicrud.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label">Kode Ruangan</label>
                                <input type="text" name="kode" class="form-control" placeholder="Masukan Kode Ruangan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Lantai Ruangan</label>
                                <input type="text" name="lantai" class="form-control" placeholder="Masukan Lantai Ruangan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kode Ruangan</label>
                                <input type="text" name="kode" class="form-control" placeholder="Masukan Kode Ruangan">
                            </div>
                            <div class="mb-3">

                                <select class="form-select">
                                    <option selected>Kondisi Ruangan</option>
                                    <option value="terisi">Terisi</option>
                                    <option value="kosong">Kosong</option>
                                </select>

                            </div>
                            <div class="text-center">
                                <hr>
                                <div class="btn btn-primary" name="simpan" type="submit">Simpan</div>
                                <div class="btn btn-danger" name="kosongkan" type="reset">Kosongkan</div>


                            </div>

                        </form>
                        <!-- akhir form -->
                    </div>
                    <div class="card-footer bg-info">
                    </div>
                </div>

            </div>
        </div>
        <div class="card mt-5">
            <div class="card-header bg-info">
                Form input Data Ruangan
            </div>
            <div class="card-body">
                <table class="table table-hover table-border table-striped">
                    <tr>
                        <th>No.</th>
                        <th>Kode Ruangan</th>
                        <th>Lantai</th>
                        <th>Gedung</th>
                        <th>Kondisi</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no = 1;
                    $tampil = mysqli_query($conn, "SELECT * FROM ruangan ORDER BY id DESC");
                    while ($data = mysqli_fetch_array($tampil)) :
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['kode'] ?></td>
                            <td><?= $data['lantai'] ?></td>
                            <td><?= $data['gedung'] ?></td>
                            <td><?= $data['kondisi'] ?></td>
                            <td>
                                <a href="#" class="btn btn-warning">edit</a>
                                <a href="#" class="btn btn-danger">hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>

                </table>
            </div>
            <div class="card-footer bg-info">
            </div>
        </div>





    </div>
    </div>
    </div>
</body>

</html>